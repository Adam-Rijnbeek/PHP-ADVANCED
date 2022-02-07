<body>
   <form>
   <label for="">Klassenformulier</label><br/>
    <label for="">Ik zit in klas:</label>
    <select name="" id="">
    <?php
    $klassen = ['8A' , '8B' , '8C' , '8D' , '8E' , '9A' , '9B' , '9C' , '9D' , '9E'];
    foreach($klassen as $value){
        echo "<option>.".$value."</option><br/>";
    }

?>
    </select><br/>
    <button>Verzend</button>
   </form>
</body>