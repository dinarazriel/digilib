<div class="row-fluid nav-left" >
	<div class="span3 well scroll">
	  <div class="sidebar-nav">
	  <style>

  .nav-left {
    flex: 1;
    padding-right: 10px; /* Jarak antara sidebar dan main content */
	box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.1); /* Tambahkan shadow */
	border-radius: 25px;
  }

  .main-content {
    flex: 2;
    padding-left: 10px; /* Jarak antara main content dan sidebar */
  }

  .sidebar-nav {
    background-color: #f8f9fa;
    padding: 25px;
  }

  .nav-list {
    list-style-type: none;
    padding: 0;
  }

  .nav-list li {
    padding: 10px 0;
	transition: background-color #7469B6 0.3s;
	border-bottom: 1px solid #7469B6; /* Tambahkan garis pemisah */
  }

  .nav-list .title {
    font-weight: bold;
	font-size: 1.2em;
	margin-bottom: 15px; /* Beri jarak bawah pada judul */
  }

  .well {
    background-color: #ffffff;
    border: 1px solid #dddddd;
    padding: 20px;
  }
</style>

		<ul class="nav nav-list">
			<li class="nav-header title">Menu</li>
			<li><a href="?page=daftar_buku">Daftar Buku</a></li>
			<li><a href="?page=daftar_kategori">Daftar Kategori</a></li>
			<li><a href="?page=daftar_penerbit">Daftar Penerbit</a></li>
			<li><a href="?page=daftar_pengarang">Daftar Pengarang</a></li>
			<li class="divider"></li>
			<li class="nav-header title">User</li>
			<li><a href="?page=daftar_petugas">Daftar Petugas</a></li>
			<li><a href="?page=daftar_dosen">Daftar Dosen</a></li>
			<li><a href="?page=daftar_mahasiswa">Daftar Mahasiswa</a></li>
			<li class="divider"></li>
			<li class="nav-header title">Transaksi</li>
			<li><a href="?page=daftar_peminjaman">Daftar Peminjaman</a></li>
			<li><a href="?page=daftar_pengembalian">Daftar Pengembalian</a></li>
		</ul>
	  </div><!--/.well -->
	</div><!--/span-->
	
	<div class="span9 well" id="main-content">
	  <div class="row-fluid">
		<div class="span12">
		  <?php 
			if(!isset($page))
				include("includes/p_daftar_buku.php"); 
			else
				include("includes/p_". $page .".php"); 
		  ?>
		</div><!--/span-->
	  </div><!--/row-->
	</div><!--/span-->
  </div><!--/row-->