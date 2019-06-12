<?php
namespace App\Helpers;
use Carbon;
class Helper
{
  public static function generatePassword()
  {
    $capitalLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');
    $smallLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
    $numbers .= 1234567890;
    $specialCharacters = str_shuffle('!@#$%*-');
    $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;
    $password = substr(str_shuffle($characters), 0, 8);
    return $password;
  }
  public static function sanitizeString($string)
  {
    $what = array('ä', 'ã', 'à', 'á', 'â', 'ê', 'ë', 'è', 'é', 'ï', 'ì', 'í', 'ö', 'õ', 'ò', 'ó', 'ô', 'ü', 'ù', 'ú', 'û', 'À', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ', 'ç', 'Ç', '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º', 'Ã', 'Õ', '&');
    $by = array('a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'A', 'A', 'E', 'I', 'O', 'U', 'n', 'n', 'c', 'C', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', 'A', 'O', '');
    return str_replace($what, $by, $string);
  }
  public static function limpaString($string)
  {
    $string = str_replace(' ', '_', str_replace(' da ', ' ', str_replace(' de ', ' ', str_replace(' do ', ' ', str_replace(' - ', ' ', $string )))));
    $what = array('ä', 'ã', 'à', 'á', 'â', 'ê', 'ë', 'è', 'é', 'ï', 'ì', 'í', 'ö', 'õ', 'ò', 'ó', 'ô', 'ü', 'ù', 'ú', 'û', 'À', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ', 'ç', 'Ç', '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º', 'Ã', 'Õ', '&');
    $by = array('a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'A', 'A', 'E', 'I', 'O', 'U', 'n', 'n', 'c', 'C', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_', 'A', 'O', '');
    $string = str_replace($what, $by, $string);
    $string = strtolower( filter_var($string , FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    return $string;
  }
  public static function createUrl($string)
  {
    $url = sanitizeString($string);
    return str_replace(' ', '-', strtolower(filter_var($url, FILTER_SANITIZE_FULL_SPECIAL_CHARS)) );
  }
  public static function cpfcnpj($cnpj)
  {
    if (!$cnpj) {
      return '';
    }
    if (strlen($cnpj) == 11) {
      return substr($cnpj, 0, 3) . '.' . substr($cnpj, 3, 3) . '.' . substr($cnpj, 6, 3) . '-' . substr($cnpj, 9);
    } else if (strlen($cnpj) == 14) {
      return substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);
    }
    return $cnpj;
  }
  public static function fone($fone)
  {
    if (!$fone) {
      return '';
    }
    if (strlen($fone) == 10) {
      return '(' . substr($fone, 0, 2) . ') ' . substr($fone, 2, 4) . '-' . substr($fone, 6);
    }
    if (strlen($fone) == 11) {
      return '(' . substr($fone, 0, 2) . ') ' . substr($fone, 2, 5) . '-' . substr($fone, 7);
    }
    return $fone;
  }
  public static function dataRecorrente($data, $ciclo)
  {
    $mes = date('Y-m', strtotime(str_replace("/", "-", $data)));
    $dia = date('d', strtotime(str_replace("/", "-", $data)));
    $mes_ano = date('Y-m', strtotime($ciclo, strtotime($mes)));
    $data_q = date('Y-m-d', strtotime($mes_ano.'-'.$dia));
    $data = $mes_ano.'-'.$dia == $data_q ? $data_q: date('Y-m-t', strtotime($mes_ano));
    return $data;
  }

    public static function Roman($num, $debug = false)
    {
        $n = intval($num);
        $nRoman = '';

        $default = array(
            'M'     => 1000,
            'CM'     => 900,
            'D'     => 500,
            'CD'     => 400,
            'C'     => 100,
            'XC'     => 90,
            'L'     => 50,
            'XL'     => 40,
            'X'     => 10,
            'IX'     => 9,
            'V'     => 5,
            'IV'     => 4,
            'I'     => 1,
        );

        foreach ($default as $roman => $number){
            $matches = intval($n / $number);
            $nRoman .= str_repeat($roman, $matches);
            $n = $n % $number;
        }

        if($debug){
            return sprintf('%s', $nRoman);
        }

        return $nRoman;
    }


    public static function proximoDiaUtil($data, $saida = 'Y-m-d') {
        // Converte $data em um UNIX TIMESTAMP
        $timestamp = strtotime($data);
        $ano = date('Y', $timestamp);
        $pascoa = easter_date($ano); // Limite de 1970 ou após 2037 da easter_date PHP consulta http://www.php.net/manual/pt_BR/function.easter-date.php
        $dia_pascoa = date('j', $pascoa);
        $mes_pascoa = date('n', $pascoa);
        $ano_pascoa = date('Y', $pascoa);
        $feriados = array(
            // Tatas Fixas dos feriados Nacionail Basileiras
            mktime(0, 0, 0, 1, 1, $ano), // Confraternização Universal - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 4, 21, $ano), // Tiradentes - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 5, 1, $ano), // Dia do Trabalhador - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 9, 7, $ano), // Dia da Independência - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 10, 12, $ano), // N. S. Aparecida - Lei nº 6802, de 30/06/80
            mktime(0, 0, 0, 11, 2, $ano), // Todos os santos - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 11, 15, $ano), // Proclamação da republica - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 12, 25, $ano), // Natal - Lei nº 662, de 06/04/49
            // Essas Datas depem diretamente da data de Pascoa
            // mktime(0, 0, 0, $mes_pascoa, $dia_pascoa - 48, $ano_pascoa), //2ºferia Carnaval
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa - 47, $ano_pascoa), //3ºferia Carnaval
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa - 2, $ano_pascoa), //6ºfeira Santa
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa, $ano_pascoa), //Pascoa
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa + 60, $ano_pascoa), //Corpus Cirist
        );

        $dia = date('N', $timestamp);
        foreach($feriados as $feriado){
            if($feriado == $timestamp){
                $timestamp = date('Y-m-d', strtotime('+1 days', $timestamp));
                $dia = date('N', strtotime($timestamp));
                $timestamp = strtotime($timestamp);
            }
        }
        // $timestamp = strtotime($timestamp); //a conversão precisa ser dentro da condição de feriado.
        // Calcula qual o dia da semana de $data
        // O resultado será um valor numérico:
        // 1 -> Segunda ... 7 -> Domingo
        // Se for sábado (6) ou domingo (7), calcula a próxima segunda-feira
        if ($dia >= 6) {
            $fds = $timestamp + ((8 - $dia) * 3600 * 24);
        } else {
            // Não é sábado nem domingo, mantém a data de entrada
            $fds = $timestamp;
        }

        return date($saida, $fds);
    }

    public static function formatDate($value, $format = 'd/m/Y')
    {
        return Carbon\Carbon::parse($value)->format($format);
    }

    public static function convertDate($date, $format = 'Y-m-d')
    {
        $ano= substr($date, 6, 10);
        $mes= substr($date, 3, 2);
        $dia= substr($date, 0, 2);
        $date = $ano."-".$mes."-".$dia;
        return $date;
    }

    public static function dateRange( $first, $last, $step = '+1 day', $format = 'Y-m-d' ) {
        $dates = [];
        $current = strtotime( $first );
        $last = strtotime( $last );

        while( $current <= $last ) {

            $dates[] = date( $format, $current );
            $current = strtotime( $step, $current );

        }

        return $dates;
    }

}
