<nav>
    <div id="burger" class="burger">
        <a href="index.php" class="active" style="border-bottom: solid royalblue 1px;">Inventario</a>
        <a href="u013.php">Inventario U013</a>
        <a href="medicamento.php">Lista medicamentos</a>
        <a href="download.php"><i class="fa fa-download"> Inventario</i></a>
        <a href="download_u013.php"><i class="fa fa-download"> Inventario U013</i></a>
        <a href="#" id="icon"><i class="fa fa-bars"></i></a>
    </div>
</nav>


<script>
    var icon = document.getElementById("icon");
    icon.addEventListener("click", function(){
    var burger = document.getElementById("burger");
    if(burger.className === "burger"){
        burger.className += " responsive";
    }else{
        burger.className = "burger";
    }
});
</script>