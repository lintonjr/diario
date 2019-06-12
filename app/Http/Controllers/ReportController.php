<?php

namespace App\Http\Controllers;

#use PHPJasper\PHPJasper;
use JasperPHP\JasperPHP;

class ReportController extends Controller
{

    /**
     * Reporna um array com os parametros de conexão
     * @return Array
     */
    /*
    public function getDatabaseConfig()
    {
        return [
            'driver'   => env('DB_CONNECTION'),
            'host'     => env('DB_HOST'),
            'port'     => env('DB_PORT'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'database' => env('DB_DATABASE'),
            'jdbc_dir' => base_path() . env('JDBC_DIR', '/vendor/lavela/phpjasper/bin/jasperstarter/jdbc'),
        ];
    }
    */
    /*
    public function index()
    {
        
        $input = base_path('/vendor/lavela/phpjasper/examples/hello_world.jrxml');   

        $jasper = new PHPJasper;
        $jasper->compile($input)->execute();

        dd("Teste 01");

        $input = public_path() . '/reports/hello_world.jrxml';
        //$input = base_path().'/vendor/lavela/phpjasper/examples/hello_world.jrxml';

        dd(exec('whoami'));       
        $jasper = new PHPJasper;
        dd($jasper->compile('/var/www/diario-oficial/public/reports/hello_world.jrxml')->execute());

        

        $input = public_path() . '/reports/hello_world.jasper';  
        $output = public_path() . '/reports';    
        $options = [ 
            'format' => ['pdf'] 
        ];

        $jasper = new PHPJasper;

        $jasper->process(
            $input,
            $output,
            $options
        )->execute();

        dd("Fim do Exemplo 2!");
        
        
        
        // coloca na variavel o caminho do novo relatório que será gerado
        $output = public_path() . '/reports/' . time() . '_Themes';

        // instancia um novo objeto PHPJasper
        $report = new PHPJasper;

        // chama o método que irá gerar o relatório
        // passamos por parametro:
        // o arquivo do relatório com seu caminho completo
        // o nome do arquivo que será gerado
        // o tipo de saída
        // parametros ( nesse caso não tem nenhum)   
        
        

       
        $report->process(
                public_path() . '/reports/Themes.jrxml',
                $output,
                ['pdf'],
                [],
                $this->getDatabaseConfig()
            )->execute();

        $file = $output . '.pdf';
        $path = $file;
        
        dd('teste 2');
        // caso o arquivo não tenha sido gerado retorno um erro 404
        if (!file_exists($file)) {
            abort(404);
        }

        //caso tenha sido gerado pego o conteudo
        $file = file_get_contents($file);

        //deleto o arquivo gerado, pois iremos mandar o conteudo para o navegador
        unlink($path);

        // retornamos o conteudo para o navegador que íra abrir o PDF
        return response($file, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="cliente.pdf"');
     
    }
    */

    /*
    public function index()
    {
        $output = public_path() . '/report/'.time().'_hello_world';
        $report = new JasperPHP;
        
        $report->process(
            public_path() . '/report/hello_world.jrxml', 
            $output, 
            array('pdf', 'rtf', 'xlsx', 'docx'),
            array(),
            array(),
            'pt_BR' 
        );
        
        dd($report->execute());

        exec('java -version', $output, $return);
        print_r($output);
        print_r($return);

        //return $report->output();
        $command = base_path().'/vendor/copam/phpjasper/src/JasperStarter/bin/';
        $command .= 'jasperstarter --locale pt_BR process "/var/www/diario-oficial/public/report/hello_world.jrxml" -o "/var/www/diario-oficial/public/report/1554309006_hello_world" -f pdf 2>&1';
        dd($command);
        //return shell_exec($command);
        //exec($command, $saida, $retorno);
        //print_r($saida);
        //print($retorno);
        //dd($report->execute());

        //dd($report);
    }
    */
    
    public function index()
    {
        
        $output = public_path() . '/reports/'.time().'_themes';
        $report = new JasperPHP;
        
        $report->process(
            public_path() . '/reports/Diario.jrxml', 
            $output, 
            array('pdf'),
            array(
                "daily_id" => 8
            ),
            array(
                'driver' => 'mysql',
                'username' => 'root',
                'password' => 'root',
                'host' => 'mysql',
                'database' => 'diario',
                'port' => '3306',
                //'jdbc_driver' => 'com.mysql.cj.jdbc.Driver',
                //'jdbc_url' => 'jdbc:mysql://mysql:3306/diario?verifyServerCertificate=false&useSSL=true',
                //'jdbc_url' => 'jdbc:mysql://mysql:3306/diario?autoReconnect=true&useSSL=false',
            ),
            'pt_BR' 
        );
        
        //dd($report);
        $report->execute();

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.time().'_themes.pdf');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Length: ' . filesize($output.'.pdf'));
        flush();
        readfile($output.'.pdf');
        unlink($output.'.pdf');
    }
    

    /*
    public function index()
    {
        $output = public_path() . '/report/'.time().'_Contacts';
        $ext = "pdf";
        $driver = 'json';
        $json_query= "themes";
        $data_file = public_path() . '/report/themes.json';
            
        $php_jasper = new JasperPHP;
        
        $php_jasper->process(
            public_path() . '/report/Diario.jrxml',
            $output,
            array($ext),
            array(),
            array('data_file' => $data_file, 'driver' => $driver, 'json_query' => $json_query))->execute();
    
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.time().'_Contacts.'.$ext);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Length: ' . filesize($output.'.'.$ext));
        flush();
        readfile($output.'.'.$ext);
        unlink($output.'.'.$ext);
    }
    */
    

}