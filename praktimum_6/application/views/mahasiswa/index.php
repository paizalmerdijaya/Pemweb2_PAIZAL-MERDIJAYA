<div class="container mt-3 text-center">
    <h1>Daftar Mahasiswa</h1>
	<table class="table table-dark text-center mt-5">
				<thead>
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>Predikat</th>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; ?>
					<?php foreach($mahasiswa as $mhs) : ?>
					<tr>
						<td><?=  $n  ?></td>
						<td><?=  $mhs->nim ?></td>
						<td><?=  $mhs->nama  ?></td>
						<td><?=  $mhs->gender  ?></td>
						<td><?=  $mhs->predikat()  ?></td>
					</tr>
					<?php $n++ ?>
					<?php endforeach; ?>
				</tbody>
			</table>
</div>