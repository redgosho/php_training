<h1>人口データ検索システム</h1>
<div>
    <form method="post" action="./tasks_custom/190430_php_04_result.php">
        <?php
            $input = <<<EOM
            <p>県コード
                <input type="text" id="kenCode" name="kenCode[]" requiredminlength="4" maxlength="8" size="10" placeholder="県コードを入力">
            </p>
EOM;
            for ($i=0; $i < 5; $i++) { 
                echo $input;
            }
        ?>

        <p>
            <input type="submit" value="検索">
        </p>
    </form>
</div>
