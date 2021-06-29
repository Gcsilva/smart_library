<?php

/**
 * Debug function
 * d($var);
 */
function d($var,$caller=null)
{
    if(!isset($caller)){
        $caller = array_shift(debug_backtrace(1));
    }
    echo '<code>File: '.$caller['file'].' / Line: '.$caller['line'].'</code>';
    echo '<pre>';
    yii\helpers\VarDumper::dump($var, 10, true);
    echo '</pre>';
}

/**
 * Debug function with die() after
 * dd($var);
 */
function dd($var)
{
    $caller = array_shift(debug_backtrace(1));
    d($var,$caller);
    die();
}

function xd()
{
    header("Content-Type: text/html");
    
    $args = func_get_args();
    
    $dbt = debug_backtrace();
    $linha = $dbt[0]['line'];
    $arquivo = $dbt[0]['file'];
    
    echo "<fieldset style='border:2px solid; border-color:#F00;legend'><b>Arquivo:</b>" . $arquivo . "<b><br>Linha:</b><legend>Debug On : xd ( )</legend> $linha</fieldset>";
    
    if (count($args)) {
        foreach ($args as $idx => $value) {
            echo "<pre style='background-color:#CBA; width:100%; heigth:100%;border:2px solid;'>";
            echo "ARG[$idx]<br/>";
            print_r($value);
            echo "</pre>";
        }
    } else {
        echo "<pre style='background-color:#CBA; width:100%; heigth:100%;border:2px solid;'>";
        echo "SEM ARGUMENTOS";
        echo "</pre>";
    }
    
    die();
}

function vd()
{
    header("Content-Type: text/html");
    
    $args = func_get_args();
    
    $dbt = debug_backtrace();
    $linha = $dbt[0]['line'];
    $arquivo = $dbt[0]['file'];
    
    echo "<fieldset style='border:2px solid; border-color:#F00;legend'><b>Arquivo:</b>" . $arquivo . "<b><br>Linha:</b><legend>Debug On : vd ( )</legend> $linha</fieldset>";
    
    if (count($args)) {
        foreach ($args as $idx => $value) {
            echo "<pre style='background-color:#CBA; width:100%; heigth:100%;border:2px solid;'>";
            echo "ARG[$idx]<br/>";
            var_dump($value);
            echo "</pre>";
        }
    } else {
        echo "<pre style='background-color:#CBA; width:100%; heigth:100%;border:2px solid;'>";
        echo "SEM ARGUMENTOS";
        echo "</pre>";
    }
    
    die();
}

function x()
{
    header("Content-Type: text/html");
    
    $args = func_get_args();
    
    $dbt = debug_backtrace();
    $linha = $dbt[0]['line'];
    $arquivo = $dbt[0]['file'];
    echo "<fieldset style='border:2px solid; border-color:#F00;legend'><b>Arquivo:</b>" . $arquivo . "<b><br>Linha:</b><legend>Debug On : x ( )</legend> $linha</fieldset>";
    
    if (count($args)) {
        foreach ($args as $idx => $value) {
            echo "<pre style='background-color:#ABC; width:100%; heigth:100%;border:2px solid;'>";
            echo "ARG[$idx]";
            print_r($value);
            echo "</pre>";
        }
    } else {
        echo "<pre style='background-color:#ABC; width:100%; heigth:100%;border:2px solid;'>";
        echo "SEM ARGUMENTOS";
        echo "</pre>";
    }
}

function v()
{
    header("Content-Type: text/html");
    
    $args = func_get_args();
    
    $dbt = debug_backtrace();
    $linha = $dbt[0]['line'];
    $arquivo = $dbt[0]['file'];
    echo "<fieldset style='border:2px solid; border-color:#F00;legend'><b>Arquivo:</b>" . $arquivo . "<b><br>Linha:</b><legend>Debug On : v ( )</legend> $linha</fieldset>";
    
    if (count($args)) {
        foreach ($args as $idx => $value) {
            echo "<pre style='background-color:#ABC; width:100%; heigth:100%;border:2px solid;'>";
            echo "ARG[$idx]";
            var_dump($value);
            echo "</pre>";
        }
    } else {
        echo "<pre style='background-color:#ABC; width:100%; heigth:100%;border:2px solid;'>";
        echo "SEM ARGUMENTOS";
        echo "</pre>";
    }
}

function ad()
{
    header("Content-Type: text/html");
    
    $args = func_get_args();
    
    $dbt = debug_backtrace();
    $linha = $dbt[0]['line'];
    $arquivo = $dbt[0]['file'];
    
    echo "\n------------------------------------------------\n";
    echo "Debug On : ad ( ) \n";
    echo "Arquivo:" . $arquivo . "\nLinha:$linha \n";
    
    if (count($args)) {
        foreach ($args as $idx => $value) {
            echo "\nARG[$idx]\n";
            print_r($value);
        }
    } else {
        echo "SEM ARGUMENTOS";
    }
    
    echo "\n________________________________________________\n\n";
    
    die();
}

function a()
{
    header("Content-Type: text/html");
    
    $args = func_get_args();
    
    $dbt = debug_backtrace();
    $linha = $dbt[0]['line'];
    $arquivo = $dbt[0]['file'];
    
    echo "\n------------------------------------------------\n";
    echo "Debug On : a ( ) \n";
    echo "Arquivo:" . $arquivo . "\nLinha:$linha \n";
    
    if (count($args)) {
        foreach ($args as $idx => $value) {
            echo "\n\nARG[$idx]\n";
            print_r($value);
        }
    } else {
        echo "SEM ARGUMENTOS";
    }
    
    echo "\n________________________________________________\n\n";
}
