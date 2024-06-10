<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/alunos.css">
<link rel="stylesheet" href="assets/css/dashboard.css">

<section class="home-section">
    <div class="text">Dashboard</div>
    <div class="dashboard">
        <header>
            <h1>Empréstimo de Chaves</h1>
        </header>
        <main id="contagem-emprestimos-table">
            <div class="card">
                <h2>Total de Alunos Cadastrados</h2>
                <p id="total-alunos">0</p>
            </div>
            <div class="card">
                <h2>Total de Chaves Cadastradas</h2>
                <p id="total-chaves">0</p>
            </div>
            <div class="card">
                <h2>Total de Empréstimos</h2>
                <p id="total-emprestimos"><?php
                    include 'db.php';
                    $sql = "SELECT aluno_cpf, COUNT(*) AS qtd_emprestimos FROM emprestimos GROUP BY aluno_cpf";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?php echo $row['qtd_emprestimos']; ?></td>
                        </tr>
                    <?php endwhile; ?></p>
            </div>
        </main>
    </div>
    
</section>
<script src="assets/js/dashboard.js"></script>
</body>
</html>
