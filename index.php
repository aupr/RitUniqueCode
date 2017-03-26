<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RitUniqueCode</title>
    <style>
        *, *:before, *:after {
            box-sizing: border-box;
        }
        .codeBox{
            border: 1px solid gray;
        }
        .resultBox{
            border: 1px solid gray;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Rit Unique Code!</h1>
    <p style="text-align: center;">Here is some example to generate unique code using RitUniqueCode library.</p>
    <div style="width: 600px; margin: auto;">

        <hr><hr>
        <h3>1st example: Basic code generation</h3>
        <b>Code:</b>
        <div class="codeBox">
            <code>
                &lt;?php<br>
                    &nbsp;&nbsp;include "uniquecode.php";<br>
                    &nbsp;&nbsp;<br>
                    &nbsp;&nbsp;$uq = new uniquecode();
                    &nbsp;&nbsp;<br>
                    &nbsp;&nbsp;$uq->pushDigits();<br>
                    &nbsp;&nbsp;$uq->pushUppercase();<br>
                    &nbsp;&nbsp;$uq->pushLowercase();<br>
                    &nbsp;&nbsp;$uq->setCodeLength(8);<br>
                    &nbsp;&nbsp;echo "&lt;pre&gt;";<br>
                    &nbsp;&nbsp;print_r($uq->generateCode(10)["code"]);<br>
                    &nbsp;&nbsp;echo "&lt;/pre&gt;";<br>
                ?&gt;<br>
            </code>
        </div>
        <br><b>Result:</b>
        <div class="resultBox">
            <?php
                include "uniquecode.php";

                $uq = new uniquecode();

                $uq->pushDigits();
                $uq->pushUppercase();
                $uq->pushLowercase();
                $uq->setCodeLength(8);
                echo "<pre>";
                print_r($uq->generateCode(10)["code"]);
                echo "</pre>";
            ?>
        </div>

        <hr><hr>
        <h3>2nd example: With prefix, suffix and saparator</h3>
        <b>Code:</b>
        <div class="codeBox">
            <code>
                &lt;?php<br>
                &nbsp;&nbsp;include "uniquecode.php";<br>
                &nbsp;&nbsp;<br>
                &nbsp;&nbsp;$uq = new uniquecode();
                &nbsp;&nbsp;<br>
                &nbsp;&nbsp;$uq->pushDigits();<br>
                &nbsp;&nbsp;$uq->pushUppercase();<br>
                &nbsp;&nbsp;$uq->pushLowercase();<br>
                &nbsp;&nbsp;$uq->setCodeLength(16);<br>
                &nbsp;&nbsp;$uq->setPrefix("PREF-");<br>
                &nbsp;&nbsp;$uq->setSuffix("-SUFF");<br>
                &nbsp;&nbsp;$uq->setSaparator(4,"-");<br>
                &nbsp;&nbsp;$uq->setSaparator(8,"-");<br>
                &nbsp;&nbsp;$uq->setSaparator(12,"-");<br>
                &nbsp;&nbsp;echo "&lt;pre&gt;";<br>
                &nbsp;&nbsp;print_r($uq->generateCode(10)["code"]);<br>
                &nbsp;&nbsp;echo "&lt;/pre&gt;";<br>
                ?&gt;<br>
            </code>
        </div>
        <br><b>Result:</b>
        <div class="resultBox">
            <?php
            //include "uniquecode.php";

            //$uq = new uniquecode();

            //$uq->pushDigits();
            //$uq->pushUppercase();
            //$uq->pushLowercase();
            $uq->setCodeLength(16);
            $uq->setPrefix("PREF-");
            $uq->setSuffix("-SUFF");
            $uq->setSaparator(4,"-");
            $uq->setSaparator(8,"-");
            $uq->setSaparator(12,"-");
            echo "<pre>";
            print_r($uq->generateCode(10)["code"]);
            echo "</pre>";
            ?>
        </div>

        <hr><hr>
        <h3>2nd example: including excluding of character</h3>
        <b>Code:</b>
        <div class="codeBox">
            <code>
                &lt;?php<br>
                &nbsp;&nbsp;include "uniquecode.php";<br>
                &nbsp;&nbsp;<br>
                &nbsp;&nbsp;$uq = new uniquecode();
                &nbsp;&nbsp;<br>
                &nbsp;&nbsp;$uq->pushDigits();<br>
                &nbsp;&nbsp;$uq->pushUppercase();<br>
                &nbsp;&nbsp;$uq->pushLowercase();<br>
                &nbsp;&nbsp;$uq->setCodeLength(16);<br>
                &nbsp;&nbsp;$uq->setPrefix("PREF-");<br>
                &nbsp;&nbsp;$uq->setSuffix("-SUFF");<br>
                &nbsp;&nbsp;$uq->setSaparator(4,"-");<br>
                &nbsp;&nbsp;$uq->setSaparator(8,"-");<br>
                &nbsp;&nbsp;$uq->setSaparator(12,"-");<br>
                &nbsp;&nbsp;$uq->pushExtraCharacters("@*#");<br>
                &nbsp;&nbsp;$uq->excludeCharacters("0oOl1");<br>
                &nbsp;&nbsp;echo "&lt;pre&gt;";<br>
                &nbsp;&nbsp;print_r($uq->generateCode(10)["code"]);<br>
                &nbsp;&nbsp;echo "&lt;/pre&gt;";<br>
                ?&gt;<br>
            </code>
        </div>
        <br><b>Result:</b>
        <div class="resultBox">
            <?php
            //include "uniquecode.php";

            //$uq = new uniquecode();

            //$uq->pushDigits();
            //$uq->pushUppercase();
            //$uq->pushLowercase();
            //$uq->setCodeLength(16);
            //$uq->setPrefix("PREF-");
            //$uq->setSuffix("-SUFF");
            //$uq->setSaparator(4,"-");
            //$uq->setSaparator(8,"-");
            //$uq->setSaparator(12,"-");
            $uq->pushExtraCharacters("@*#");
            $uq->excludeCharacters("0oOl1");
            echo "<pre>";
            print_r($uq->generateCode(10)["code"]);
            echo "</pre>";
            ?>
        </div>
    </div>


</body>
</html>