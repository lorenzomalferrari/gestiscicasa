import string
import random
import argparse

class PasswordGenerator:
    """
    Classe per generare password sicure,
    in base alle preferenze dell'utente.
    """

    def __init__(self, min_length=8, max_length=128):
        """
        Inizializza le opzioni predefinite
        per la generazione della password.

        :param min_length: Lunghezza minima della password.
        :param max_length: Lunghezza massima della password.
        """
        self.use_lowercase = False
        self.use_uppercase = False
        self.use_numbers = False
        self.use_special_chars = False
        self.use_spaces = False
        self.word_to_include = ""
        self.default_length = 20
        self.min_length = min_length
        self.max_length = max_length

    def ask_questions(self):
        """
        Chiede all'utente quali opzioni includere nella password
        e se deve includere una parola specifica.
        """
        self.use_lowercase = self.ask_yes_no("Vuoi usare caratteri minuscoli (a-z)? ", default=False)
        self.use_uppercase = self.ask_yes_no("Vuoi usare caratteri maiuscoli (A-Z)? ", default=False)
        self.use_numbers = self.ask_yes_no("Vuoi usare numeri (0-9)? ", default=False)
        self.use_special_chars = self.ask_yes_no("Vuoi usare caratteri speciali (es: $ % & @)? ", default=False)
        self.use_spaces = self.ask_yes_no("Vuoi usare degli spazi? ", default=False)
        self.word_to_include = input("Vuoi usare una parola all'interno della password, se sì indicare quale (ATTENZIONE: ciò potrebbe rendere la password più debole)? ").strip()

    def ask_yes_no(self, question, default=False):
        """
        Richiede all'utente una risposta sì/no con un valore predefinito
        formattato con la maiuscola.

        :param question: La domanda da porre all'utente.
        :param default: Il valore predefinito (True o False).
        :return: La risposta dell'utente come booleano.
        """
        default_text = "Sì" if default else "No"
        question_with_default = f"{question} [default: {default_text}] "

        while True:
            answer = input(question_with_default).strip().lower()
            if answer == "":
                return default
            elif answer in ['y', 'yes']:
                return True
            elif answer in ['n', 'no']:
                return False
            else:
                print("Per favore, rispondi con 'y' o 'yes' per sì, 'n' o 'no' per no.")

    def validate_length(self, length):
        """
        Verifica e regola la lunghezza della password
        in base ai limiti minimi e massimi.

        :param length: La lunghezza della password richiesta.
        :return: La lunghezza valida.
        """
        if length < self.min_length:
            print(f"La lunghezza minima è {self.min_length}. Imposto automaticamente a {self.min_length}.")
            return self.min_length
        if length > self.max_length:
            print(f"La lunghezza massima è {self.max_length}. Imposto automaticamente a {self.max_length}.")
            return self.max_length
        return length

    def build_char_pool(self):
        """
        Costruisce il pool di caratteri in base
        alle opzioni selezionate dall'utente.

        :return: Una stringa contenente tutti i caratteri disponibili per la password.
        """
        char_pool = ""
        if self.use_lowercase:
            char_pool += string.ascii_lowercase
        if self.use_uppercase:
            char_pool += string.ascii_uppercase
        if self.use_numbers:
            char_pool += string.digits
        if self.use_special_chars:
            char_pool += string.punctuation
        if self.use_spaces:
            char_pool += " "
        return char_pool

    def generate_password(self, length=None):
        """
        Genera una password casuale basata sulle preferenze dell'utente e sulla parola inclusa.

        :param length: La lunghezza della password richiesta. Usa la lunghezza predefinita se non specificata.
        :return: La password generata come stringa.
        :raises ValueError: Se non viene selezionato alcun carattere o se la lunghezza è troppo corta.
        """
        char_pool = self.build_char_pool()

        if not char_pool and not self.word_to_include:
            raise ValueError("Devi selezionare almeno un tipo di carattere o includere una parola.")

        password = self.word_to_include
        if length is None:
            length = self.default_length

        length = self.validate_length(length)
        remaining_length = length - len(password)

        if remaining_length < 0:
            raise ValueError("La lunghezza richiesta è troppo corta rispetto alla parola inclusa.")

        password += ''.join(random.choice(char_pool) for _ in range(remaining_length))
        return self.shuffle_password(password)

    def shuffle_password(self, password):
        """
        Mescola i caratteri della password per aumentarne la sicurezza.

        :param password: La password da mescolare.
        :return: La password mescolata come stringa.
        """
        password_list = list(password)
        random.shuffle(password_list)
        return ''.join(password_list)

def main():
    """
    Funzione principale per gestire l'interazione con l'utente e la generazione della password.
    """
    parser = argparse.ArgumentParser(description="Generatore di password sicure.")
    parser.add_argument('--min-length', type=int, default=8, help='Lunghezza minima della password.')
    parser.add_argument('--max-length', type=int, default=128, help='Lunghezza massima della password.')
    args = parser.parse_args()

    while True:
        generator = PasswordGenerator(min_length=args.min_length, max_length=args.max_length)
        generator.ask_questions()

        if not any([generator.use_lowercase, generator.use_uppercase, generator.use_numbers, generator.use_special_chars, generator.use_spaces, generator.word_to_include]):
            print("Devi selezionare almeno un tipo di carattere o includere una parola.")
            continue

        try:
            password_length_input = input(f"Quale lunghezza deve avere la password? [default: {generator.default_length}] ").strip()
            password_length = int(password_length_input) if password_length_input else generator.default_length
        except ValueError:
            print("Lunghezza non valida. Utilizzo del valore predefinito.")
            password_length = generator.default_length

        try:
            password = generator.generate_password(password_length)
            print(f"La password generata è: {password}")
        except ValueError as e:
            print(e)
            continue

        if input("Vuoi generare un'altra password? (y/n): ").strip().lower() not in ['y', 'yes']:
            break

if __name__ == "__main__":
    main()
