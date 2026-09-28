<?php
    function esHoraValida(string $hora): bool
    {
        $horaValida = true;
        $partesHora = explode(":", $hora);

        if (count($partesHora) !== 3) {
            $horaValida = false;
        } elseif (!ctype_digit($partesHora[0]) || !ctype_digit($partesHora[1]) || !ctype_digit($partesHora[2])) {
            $horaValida = false;
        } elseif ($partesHora[0] > 23 || $partesHora[0] < 0) {
            $horaValida = false;
        } elseif ($partesHora[1] < 0 || $partesHora[1] > 59) {
            $horaValida = false;
        } elseif ($partesHora[2] < 0 || $partesHora[2] > 59) {
            $horaValida = false;
        }

        return $horaValida;
    }
?>