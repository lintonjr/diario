<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            border: none;
            width: 17cm;
        }
        .container {
            /* You *must* define a fixed height which is
               large enough to fit the whole content,
               otherwise the layout is unpredictable. */
            height: 80em;
            /* Width and count aren't respected, but you
               have to give at least some dummy value (??). */
            -webkit-columns: 0 0;
            /* This is the strange way to define the number of columns:
               50% = 2 columns, 33% = 3 columns 25% = 4 columns */
            width: 75%; 
            /* Gap and rule do work. */
            -webkit-column-gap: 2em;
            -webkit-column-rule: 1px solid black;
            text-align: justify;
            border: 1px solid black;
        }
        footer {
            page-break-after: always;
        }
    </style>
</head>
<body>
    @php
        $doc = array();
        $p = 0;
        $l = 0;
    @endphp
    @foreach ($themes as $theme)
        @php
            unset($arr);
            $arr = explode("\n", $theme->content);
            foreach ($arr as $value) { 
                if (trim($value)!='') 
                { 
                    $doc[$p][$l] = $value;
                    $l++;
                    if ($l>=80){
                        $l=0;
                        $p++;
                    }
                } 
            }
        @endphp
    @endforeach
    @foreach ($doc as $pg)
        <div class="container">
            @foreach ($pg as $linha)
                {!!$linha!!}
            @endforeach
        </div>
        <footer></footer>
    @endforeach
</body>
</html>