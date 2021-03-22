<?php
interface Publicação {
    public function abrir();
    public function fechar();
    public function folhear($pagina);
    public function avançarPag();
    public function voltarPag();
}
?>