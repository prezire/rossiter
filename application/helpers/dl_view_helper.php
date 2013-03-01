<?php
function show_layout_view($controller, $directory, $page_name, $data)
{
  $controller->load->view('templates/header', $data);
  $controller->load->view($directory . '/' . $page_name, $data);
  $controller->load->view('templates/footer', $data);
}