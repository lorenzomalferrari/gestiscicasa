<?php declare(strict_types=1);

abstract class Config
{
    private static ?self $instance = null;
    private array $config;

    // Costruttore privato per evitare l'instanziazione diretta
    private function __construct(array $config)
    {
        $this->config = $config;
    }

    // Metodo statico per ottenere l'istanza della classe Config
    public static function getInstance(array $config = []): self
    {
        if (self::$instance === null) {
            self::$instance = new class($config) extends Config{};
        }
        return self::$instance;
    }

    // Getter per ottenere il valore di una variabile di configurazione
    public function get(string $key)
    {
        return $this->config[$key] ?? null;
    }

    // Setter per impostare il valore di una variabile di configurazione
    public function set(string $key, $value): void
    {
        $this->config[$key] = $value;
    }

    // Metodo per ottenere tutte le configurazioni
    public function getAll(): array
    {
        return $this->config;
    }
}
/*
// Esempio di utilizzo
$configArray = [
    'SERVERNAME_DB' => 'localhost',
    'USERNAME_DB' => 'root',
    'PASSWORD_DB' => 'password',
    'DBNAME' => 'database',
    'TABLEPREFIX' => 'prefix_',
    'VERSTIME' => '1.0',
    'YEARNOW' => date('Y'),
    'UNIQ_TOKEN' => uniqid(),
];

// Inizializza la configurazione una volta
$config = Config::getInstance($configArray);

// Accedi ai valori di configurazione
echo $config->get('SERVERNAME_DB');
echo $config->get('USERNAME_DB');

// Imposta nuovi valori di configurazione
$config->set('NEW_SETTING', 'value');

// Ottieni tutte le configurazioni
print_r($config->getAll());
*/
