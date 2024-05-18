<?php
if (!function_exists('format_cop')) {
    /**
     * Formatear un valor numérico como moneda con símbolo COP y separadores adecuados.
     *
     * @param  float  $value
     * @return string
     */
    function format_cop(float $value): string
    {
        return "COP " . number_format($value, 0, ',', '.');
    }
}
