<?php
include 'db.php';

header('Content-Type: application/json');

$totalAlunos = $conn->query("SELECT COUNT(*) AS count FROM alunos")->fetch_assoc()['count'];
$totalChaves = $conn->query("SELECT COUNT(*) AS count FROM chaves")->fetch_assoc()['count'];
$totalAlunosDevolucao = $conn->query("SELECT COUNT(DISTINCT aluno_cpf) AS count FROM emprestimos WHERE devolvido = 0")->fetch_assoc()['count'];
$totalEmprestimos = $conn->query("SELECT COUNT(*) AS count FROM emprestimos")->fetch_assoc()['count'];

// Adicionando linhas de depuração
var_dump($totalAlunos);
var_dump($totalChaves);
var_dump($totalAlunosDevolucao);
var_dump($totalEmprestimos);

$data = [
    'totalAlunos' => $totalAlunos,
    'totalChaves' => $totalChaves,
    'totalAlunosDevolucao' => $totalAlunosDevolucao,
    'totalEmprestimos' => $totalEmprestimos
];

echo json_encode($data);

$conn->close();
?>
