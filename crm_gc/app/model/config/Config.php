<?php declare(strict_types=1);

/**
 * Config Class
 *
 * Questa classe fornisce un'interfaccia per gestire configurazioni globali dell'applicazione.
 */
abstract class Config
{
    /** @var self|null $instance Istanza singola della classe Config */
    private static ?self $instance = null;

    /** @var array $config Array associativo contenente le configurazioni */
    private array $config;

    /**
     * Costruttore privato per evitare l'instanziazione diretta.
     *
     * @param array $config Array contenente le configurazioni iniziali.
     */
    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Ottiene l'unica istanza della classe Config.
     *
     * @param array $config Array opzionale di configurazioni iniziali.
     * @return self Istanza della classe Config.
     */
    public static function getInstance(array $config = []): self
    {
        if (self::$instance === null) {
            self::$instance = new class($config) extends Config
            {
            };
        }
        return self::$instance;
    }

    /**
     * Ottiene il valore di una variabile di configurazione specificata.
     *
     * @param string $key Chiave della variabile di configurazione.
     * @return string|int|array|bool|null Valore della variabile di configurazione, o null se non esiste.
     */
    public function get(string $key): string|int|array|bool|null
    {
        return $this->config[$key] ?? null;
    }

    /**
     * Imposta il valore di una variabile di configurazione.
     *
     * @param string $key Chiave della variabile di configurazione da impostare.
     * @param mixed $value Valore da assegnare alla variabile di configurazione.
     * @return void
     */
    public function set(string $key, $value): void
    {
        $this->config[$key] = $value;
    }

    /**
     * Ottiene tutte le configurazioni correntemente memorizzate.
     *
     * @return array Array associativo contenente tutte le configurazioni.
     */
    public function getAll(): array
    {
        return $this->config;
    }
}
