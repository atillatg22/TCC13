<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/alunos.css">
<link rel="stylesheet" href="assets/css/dashboard.css">

<section class="home-section">
    <div class="text">Dashboard</div>
    <div class="dashboard">
        <main id="contagem-emprestimos-table">
            <div class="card">
                <h2>Total de Alunos Cadastrados</h2>
                <p id="total-alunos"><?php
        include 'db.php';
        $sql = "SELECT COUNT(*) AS total_alunos FROM alunos";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['total_alunos'];
    ?></p>
            </div>
            <div class="card">
    <h2>Total de Chaves Cadastradas</h2>
    <p id="total-chaves"><?php
        include 'db.php';
        $sql = "SELECT COUNT(*) AS total_chaves FROM chaves";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['total_chaves'];
    ?></p>
</div>
            <div class="card">
                <h2>Total de Empréstimos</h2>
                <p id="total-emprestimos"><?php
        include 'db.php';
        $sql = "SELECT COUNT(*) AS total_emprestimos FROM emprestimos";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['total_emprestimos'];
    ?></p>
            </div>
        </main>
    </div>
    
</section>
<script src="assets/js/dashboard.js"></script>
</body>
</html>
