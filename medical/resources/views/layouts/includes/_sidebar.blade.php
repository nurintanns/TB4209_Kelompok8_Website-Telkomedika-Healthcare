<br>
<br>
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
				</li>
					@if(auth()->user()->role=='admin')
						<li><a href="/dokter" class=""><i class="lnr lnr-code"></i> <span>Master Dokter</span></a></li>
						<li><a href="/pasien" class=""><i class="lnr lnr-code"></i> <span>Master Pasien</span></a></li>
						<li><a href="/artikel" class=""><i class="lnr lnr-code"></i> <span>Master Artikel</span></a></li>
						<li><a href="/seluruhdatakonsul" class=""><i class="lnr lnr-code"></i> <span>Master Konsultasi</span></a></li>
						<li><a href="/datakonsultasiselesai" class=""><i class="lnr lnr-code"></i> <span>Data Konsultasi Sukses</span></a></li>
						@endif


						@if(auth()->user()->role=='dokter')
						<li><a href="/jadwalkonsul" class=""><i class="lnr lnr-code"></i> <span>Jadwal Konsultasi</span></a></li>
						<li><a href="/datakonsultasipasien" class=""><i class="lnr lnr-code"></i> <span>Data Konsul Pasien</span></a></li>
						@endif
			</ul>
		</nav>
	</div>
</div>