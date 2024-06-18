import string
import random

class PasswordGenerator:
    def __init__(self):
        self.use_lowercase = False
        self.use_uppercase = False
        self.use_numbers = False
        self.use_special_chars = False
        self.use_spaces = False
        self.word_to_include = ""

    def ask_questions(self):
        self.ask_lowercase()
        self.ask_uppercase()
        self.ask_numbers()
        self.ask_special_chars()
        self.ask_spaces()
        self.ask_word_to_include()

    def ask_yes_no(self, question):
        while True:
            answer = input(question).strip().lower()
            if answer in ['y', 'yes']:
                return True
            elif answer in ['n', 'no']:
                return False
            else:
                print("Per favore, rispondi con 'y' o 'yes' per sì, 'n' o 'no' per no.")

    def ask_lowercase(self):
        self.use_lowercase = self.ask_yes_no("Vuoi usare caratteri minuscoli (a-z)? ")

    def ask_uppercase(self):
        self.use_uppercase = self.ask_yes_no("Vuoi usare caratteri maiuscoli (A-Z)? ")

    def ask_numbers(self):
        self.use_numbers = self.ask_yes_no("Vuoi usare numeri (0-9)? ")

    def ask_special_chars(self):
        self.use_special_chars = self.ask_yes_no("Vuoi usare caratteri speciali (es: $ % & @)? ")

    def ask_spaces(self):
        self.use_spaces = self.ask_yes_no("Vuoi usare degli spazi? ")

    def ask_word_to_include(self):
        self.word_to_include = input("Vuoi usare una parola all'interno della password, se sì indicare quale (ATTENZIONE: ciò potrebbe rendere la password più debole)? ").strip()

    def generate_password(self, length=12):
        if not any([self.use_lowercase, self.use_uppercase, self.use_numbers, self.use_special_chars, self.use_spaces]) and not self.word_to_include:
            raise ValueError("Devi selezionare almeno un tipo di carattere o includere una parola.")

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

        if not char_pool and not self.word_to_include:
            raise ValueError("La pool di caratteri è vuota. Rivedi le tue scelte.")

        # Aggiungi la parola specificata se esiste
        password = self.word_to_include
        
        # Calcola la lunghezza rimanente della password
        remaining_length = length - len(password)
        
        # Riempie la password con caratteri casuali dalla pool fino alla lunghezza desiderata
        for _ in range(remaining_length):
            password += random.choice(char_pool)

        # Converti la password in una lista e mescola
        password_list = list(password)
        random.shuffle(password_list)

        # Converti la lista in una stringa
        return ''.join(password_list)

# Utilizzo della libreria
if __name__ == "__main__":
    generator = PasswordGenerator()
    generator.ask_questions()
    password_length = int(input("Quale lunghezza deve avere la password? "))
    password = generator.generate_password(password_length)
    print(f"La password generata è: {password}")
