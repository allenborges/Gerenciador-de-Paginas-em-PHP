<?php
function pages_get_data($redirectOnError)
{
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (is_null($title) or is_null($url)) {
        flash('Informe os campos de título e url', 'error');
        header('location:' . $redirectOnError);
        die();
    }

    return compact('title', 'body', 'url');
}



$pages_all = function () use ($conn) {
    $result = $conn->query('SELECT*FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) use ($conn) {
    $sql = 'SELECT * FROM pages WHERE id=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$pages_create = function () use ($conn) {
    //cadastra uma página
    $data = pages_get_data('/admin/pages/create');
    $sql = 'insert into pages (title, body, url, created, updated) VALUES(?, ?, ?, NOW(), NOW())';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['body'], $data['url']);

    flash('Criou registro com sucesso', 'sucess');
    return $stmt->execute();
};



$pages_edit = function ($id) use ($conn) {
    //atualiza uma página

    $data = pages_get_data('/admin/pages/' . $id . '\edit');
    $sql = 'UPDATE pages SET title=?, body=?, url=?, updated=NOW() WHERE id=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $data['title'], $data['body'], $data['url'], $id);

    flash('Criou registro com sucesso', 'sucess');
    return $stmt->execute();

    flash('Atualizou registro com sucesso', 'sucess');
};



$pages_delete = function ($id) use ($conn) {
    //remove uma página

    $sql = 'DELETE FROM pages WHERE id=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    flash('Removeu Registro com Sucesso', 'sucess');
    return $stmt->execute();
};
