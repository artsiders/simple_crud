<?php
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    $clients = readSearch($pdo, $search);
} else {
    $clients = readAll($pdo);
}
?>

<div class="controle">
    <div class="module">
        <button class="btnadd" onclick="link('index.php?action=create')"> Ajouter un client <i class="fas fa-plus-square"></i> </button>
    </div>
    <h1>LISTE DES CLIENTS</h1>
    <form action="index.php" method="GET">
        <div class="search">
            <input type="search" name="search" placeholder="rechercher un client">
            <button type="submit" class="btnadd btn_search"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
<div class="table">
    <div class="entete">
        <div class="id">Num</div>
        <div>NOM</div>
        <div>TELEPHONE</div>
        <div class="email">EMAIL</div>
        <div>ACTION</div>
    </div>

    <div class="list">
        <?php
        if (!empty($clients)) :
            foreach ($clients as $key => $client) :
                $update = 'index.php?action=update&idclient=' . $client['idclient'];
                $delete = 'index.php?action=delete&idclient=' . $client['idclient'];
        ?>
                <div class="tbody">
                    <div class="id"><?= $key + 1 ?></div>
                    <div><?= $client['nom'] ?></div>
                    <div><?= $client['telephone'] ?></div>
                    <div class="email"><?= $client['email'] ?></div>
                    <div>
                        <div class="btn_action" onclick="link('<?= $update ?>')"><i class="fas fa-user-edit"></i></div>
                        &nbsp;&nbsp;
                        <div class="btn_action" onclick="deletes('<?= $client['idclient'] ?>', '<?= $client['nom'] ?>');"><i class="fas fa-trash"></i></div>
                    </div>
                </div>

        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>