<?php
session_start();

$usuario_logado = isset($_SESSION['usuario_id']);
$usuario_nome = $_SESSION['usuario_nome'] ?? 'Seu Nome';
$usuario_bio = $_SESSION['usuario_bio'] ?? 'Sua biografia vai aqui...';
$usuario_foto = $_SESSION['usuario_foto'] ?? 'https://cdn-icons-png.flaticon.com/512/847/847969.png';
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Feed de Livros</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg:#121212; 
      --fg:#e0e0e0; 
      --fg-secondary:#aaaaaa; 
      --header:#006400; 
      --header-hover:#008000;
      --card:#1e1e1e; 
      --panel-bg:#1c1c1c; 
      --shadow: rgba(0,0,0,0.7);
    }

    * { box-sizing:border-box; margin:0; padding:0; font-family:'Inter', sans-serif; }
    body {
      background: var(--bg);
      color: var(--fg);
      min-height:100vh;
      line-height:1.6;
      scroll-behavior: smooth;
    }

    a { text-decoration:none; color:var(--fg-secondary); transition: color 0.2s; }
    a:hover { color: var(--header); }

    header {
      background-color: var(--header);
      height:60px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:0 20px;
      position:sticky;
      top:0;
      z-index:10;
      box-shadow: 0 2px 6px var(--shadow);
      border-bottom-left-radius:8px;
      border-bottom-right-radius:8px;
    }

    .menu-btn {
      width:28px; height:20px; display:flex; flex-direction:column; justify-content:space-between; cursor:pointer;
    }
    .menu-btn div { height:3px; background:white; border-radius:3px; }

    .profile {
      width:40px; height:40px; border-radius:50%; border:2px solid white; object-fit:cover; cursor:pointer;
      transition: transform 0.3s;
    }
    .profile:hover { transform: scale(1.1); }

    .account-dropdown {
      position:absolute; top:65px; right:20px; width:240px;
      background-color: var(--panel-bg);
      box-shadow:0 4px 15px var(--shadow);
      border-radius:8px;
      display:none;
      flex-direction:column;
      z-index:2000;
      overflow:hidden;
    }
    .account-dropdown.show { display:flex; }
    .account-dropdown button {
      padding:12px 16px;
      border:none;
      background:none;
      text-align:left;
      cursor:pointer;
      font-size:15px;
      color:var(--fg);
      transition: background 0.2s;
    }
    .account-dropdown button:hover { background-color: rgba(255,255,255,0.05); }

    /* Modal base */
    .modal {
      position:fixed;
      top:50%; left:50%;
      transform:translate(-50%,-50%) scale(0.95);
      background-color:var(--card);
      color:var(--fg);
      width:360px;
      max-width:90%;
      border-radius:10px;
      box-shadow:0 8px 30px var(--shadow);
      padding:25px;
      z-index:1000;
      text-align:center;
      opacity:0;
      pointer-events:none;
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .modal.show { opacity:1; pointer-events:auto; transform:translate(-50%,-50%) scale(1); }

    .modal h2 { margin-bottom:12px; color:var(--header); }
    .modal hr { border:0; border-top:1px solid rgba(255,255,255,0.1); margin:10px 0; }

    .modal-overlay {
      display:none;
      position:fixed;
      top:0; left:0; width:100%; height:100%;
      background:rgba(0,0,0,0.6);
      backdrop-filter: blur(2px);
      z-index:999;
    }
    .modal-overlay.show { display:block; }

    /* Inputs e botões */
    input, textarea {
      padding:12px; border-radius:8px; background-color:var(--panel-bg); border:none; color:var(--fg); width:100%;
    }
    input:focus, textarea:focus { outline:2px solid var(--header); }

    input[type="submit"], button, .custom-file-btn {
      padding:12px; background-color:var(--header); color:#fff; font-weight:bold;
      border:none; border-radius:8px; cursor:pointer; width:100%; transition: 0.2s;
    }
    input[type="submit"]:hover, button:hover, .custom-file-btn:hover { background-color:var(--header-hover); transform:scale(1.02); }

    .profile-preview {
      width:110px; height:110px; border-radius:50%; object-fit:cover; margin:0 auto 15px; border:2px solid var(--header);
      transition: transform 0.3s;
    }
    .profile-preview:hover { transform: scale(1.1); }

    /* Side menu */
    aside {
      position:fixed; top:0; left:-280px; width:280px; height:100%;
      background-color:var(--panel-bg); box-shadow:2px 0 12px var(--shadow);
      padding:25px; transition:left 0.3s ease; z-index:9999;
      display:flex; flex-direction:column; gap:18px;
    }
    aside.show { left:0; }
    aside h3 { color:var(--fg); margin-bottom:12px; font-weight:600; font-size:18px; }
    aside a { color:var(--fg-secondary); font-size:15px; }
    aside a:hover { color: var(--header); }
    aside button { margin-top:auto; padding:12px; border-radius:8px; background-color:var(--header); color:#fff; font-weight:bold; cursor:pointer; transition:0.2s; }
    aside button:hover { background-color:var(--header-hover); transform:scale(1.02); }

    main {
      display:grid;
      grid-template-columns: repeat(auto-fit,minmax(180px,1fr));
      gap:20px;
      padding:20px;
      max-width:1200px;
      margin:0 auto;
    }

    /* Book cards */
    .book-card {
      background: var(--card);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px var(--shadow);
      transition: transform 0.2s, box-shadow 0.2s;
      display:flex; flex-direction:column;
    }
    .book-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px var(--shadow);
    }
    .book-card img {
      width: 100%;
      height:240px;
      object-fit:cover;
    }
    .book-card .info {
      padding:12px;
      flex:1;
      display:flex; flex-direction:column; justify-content:space-between;
    }
    .book-card .info h4 {
      font-size:16px;
      margin-bottom:6px;
      color: var(--fg);
    }
    .book-card .info p {
      font-size:14px;
      color: var(--fg-secondary);
    }

    @media(max-width:600px){
      header { padding:0 12px; }
      .menu-btn { width:24px; height:18px; }
      .profile { width:36px; height:36px; }
      aside { width:220px; padding:20px; }
      main { gap:12px; padding:12px; }
    }

  </style>
</head>
<body>

<!-- Aviso -->
<div id="modalAviso" class="modal">
  <h2>Aviso</h2><hr>
  <p>Todos os pagamentos e produtos como livros são processados via Eduzz, uma plataforma segura. Nenhum dado de cartão é armazenado neste site.</p>
  <button id="fecharAviso">Fechar</button>
</div>
<div id="overlayAviso" class="modal-overlay"></div>

<!-- Side Menu -->
<aside id="sideMenu">
  <h3>☰ Menu</h3>
  <a href="home/suport/ajuda.php">❓ Ajuda e Suporte</a>
  <button id="fecharMenuBtn">Fechar Menu</button>
</aside>

<header>
  <div class="menu-btn" id="openMenu"><div></div><div></div><div></div></div>
  <img src="<?= htmlspecialchars($usuario_foto) ?>" alt="Perfil" class="profile" id="profileBtn">
</header>

<div class="account-dropdown" id="accountMenu">
  <?php if($usuario_logado): ?>
    <button id="openAccount">Minha Conta</button>
    <form method="POST" action="home/0/logout.php"><button type="submit">Sair da Conta</button></form>
  <?php else: ?>
    <button id="openAccount">Entrar na Conta</button>
  <?php endif; ?>
</div>

<main>
  <?php include __DIR__ . '/feed/feed.php'; ?>
</main>

<!-- Modal Conta -->
<div id="modalAccount" class="modal">
  <h2><?= $usuario_logado ? 'Editar Perfil' : 'Entrar na Conta' ?></h2>
  <div id="modalContent">
    <?php if(!$usuario_logado): ?>
      <form method="POST" action="home/0/login.php" style="display:flex; flex-direction:column; gap:15px;">
        <input type="email" name="email" placeholder="Seu email" required>
        <input type="password" name="senha" placeholder="Sua senha" required>
        <input type="submit" value="Entrar">
        <div style="text-align:center; font-size:14px;">Ainda não tem conta? <a href="home/0/cadastro.php">Criar agora</a></div>
      </form>
    <?php else: ?>
      <form method="POST" action="atualizar_perfil.php" enctype="multipart/form-data" style="display:flex; flex-direction:column; gap:15px;">
        <img src="<?= htmlspecialchars($usuario_foto) ?>" class="profile-preview" id="previewImg">
        <label for="fotoUpload" class="custom-file-btn">Escolher nova foto</label>
        <input type="file" id="fotoUpload" name="foto" accept="image/*" hidden onchange="previewImagem(this)">
        <input type="text" name="nome" maxlength="10" value="<?= htmlspecialchars($usuario_nome) ?>" placeholder="Seu nome (até 10 letras)" required>
        <textarea name="bio" maxlength="300" rows="4" placeholder="Sua biografia..."><?= htmlspecialchars($usuario_bio) ?></textarea>
        <button type="submit">Salvar</button>
      </form>
    <?php endif; ?>
  </div>
  <button id="closeModal">Fechar</button>
</div>
<div id="modalOverlay" class="modal-overlay"></div>

<script>
  // Aviso
  const modalAviso = document.getElementById('modalAviso');
  const overlayAviso = document.getElementById('overlayAviso');
  document.getElementById('fecharAviso').onclick = () => {
    modalAviso.classList.remove('show');
    overlayAviso.classList.remove('show');
  };
  window.addEventListener('load', () => {
    modalAviso.classList.remove('show');
    overlayAviso.classList.remove('show');
  });

  // Side Menu
  const sideMenu = document.getElementById('sideMenu');
  document.getElementById('openMenu').onclick = () => sideMenu.classList.add('show');
  document.getElementById('fecharMenuBtn').onclick = () => sideMenu.classList.remove('show');

  // Account Dropdown
  const profileBtn = document.getElementById('profileBtn');
  const accountMenu = document.getElementById('accountMenu');
  profileBtn.onclick = (e) => {
    e.stopPropagation();
    accountMenu.classList.toggle('show');
  };
  document.addEventListener('click', (e) => {
    if (!accountMenu.contains(e.target) && !profileBtn.contains(e.target)) {
      accountMenu.classList.remove('show');
    }
  });

  // Modal Conta
  const openAccountBtn = document.getElementById('openAccount');
  const modalAccount = document.getElementById('modalAccount');
  const modalOverlay = document.getElementById('modalOverlay');
  const closeModal = document.getElementById('closeModal');

  if(openAccountBtn){
    openAccountBtn.onclick = () => {
      modalAccount.classList.add('show');
      modalOverlay.classList.add('show');
      accountMenu.classList.remove('show');
    }
  }
  closeModal.onclick = () => { modalAccount.classList.remove('show'); modalOverlay.classList.remove('show'); }
  modalOverlay.onclick = () => { modalAccount.classList.remove('show'); modalOverlay.classList.remove('show'); }

  // Preview Imagem
  function previewImagem(input){
    if(input.files && input.files[0]){
      document.getElementById('previewImg').src = URL.createObjectURL(input.files[0]);
    }
  }
</script>

</body>
</html>
