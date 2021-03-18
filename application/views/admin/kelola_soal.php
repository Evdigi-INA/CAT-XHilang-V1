<div class="container" style="background-color: #ececec;
    border-radius: 5px;">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/index' ?>">Menu Utama</a></li>
	    	<li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/pilih_kelola_soal'?>">Kelola Soal</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $jenissoalnya; ?></li>
		</ol>
	</nav>
</div>
<div class="container" style="overflow-y: scroll;
    height: 75vh;">
	<div class="row">
	  	<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom1 as $sk1) {
		  				$ask1 = explode('-', $sk1->soal);
		  				$id1 = "?kolomsoal=KLM01&idkolomjawaban=".$sk1->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id1 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom1a" name="tbsoalkolom1a" value="<?php echo $ask1[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom1b" name="tbsoalkolom1b" value="<?php echo $ask1[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom1c" name="tbsoalkolom1c" value="<?php echo $ask1[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom1d" name="tbsoalkolom1d" value="<?php echo $ask1[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
							    <td><input type="text" class="tbsoal" id="tbsoalkolom1e" name="tbsoalkolom1e" value="<?php echo $ask1[4] ?>" maxlength="1" style="width: 100%;text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 1</h5>
		  		</div>
	  			<div class="card-body">
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id1 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom1 as $jl1) {  //initialize
		    						$arrayjawabanlist1 = explode('-', $jl1->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener1 = explode('-', $jl1->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist1 as $listjawaban1) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl1 = explode(' ', $listjawaban1); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener1 as $jb1) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb1[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom1" class="check-input" value="A" <?php if ($jb1[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom1" value="<?php echo $jl1[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom1" class="check-input" value="B" <?php if ($jb1[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom1" value="<?php echo $jl1[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom1" class="check-input" value="C" <?php if ($jb1[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom1" value="<?php echo $jl1[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom1" class="check-input" value="D" <?php if ($jb1[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom1" value="<?php echo $jl1[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom1" class="check-input" value="E" <?php if ($jb1[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-lima">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom1" id="pilihanebaris<?php echo $i ?>kolom1" value="<?php echo $jl1[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>

		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom2 as $sk2) {
		  				$ask2 = explode('-', $sk2->soal);
		  				$id2 = "?kolomsoal=KLM02&idkolomjawaban=".$sk2->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id2 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom2a" name="tbsoalkolom2a" value="<?php echo $ask2[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom2b" name="tbsoalkolom2b" value="<?php echo $ask2[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom2c" name="tbsoalkolom2c" value="<?php echo $ask2[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom2d" name="tbsoalkolom2d" value="<?php echo $ask2[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom2e" name="tbsoalkolom2e" value="<?php echo $ask2[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 2</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id2 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom2 as $jl2) {  //initialize
		    						$arrayjawabanlist2 = explode('-', $jl2->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener2 = explode('-', $jl2->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist2 as $listjawaban2) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl2 = explode(' ', $listjawaban2); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener2 as $jb2) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb2[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom2" class="check-input" value="A" <?php if ($jb2[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom2" value="<?php echo $jl2[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom2" class="check-input" value="B" <?php if ($jb2[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom2" value="<?php echo $jl2[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom2" class="check-input" value="C" <?php if ($jb2[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom2" value="<?php echo $jl2[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom2" class="check-input" value="D" <?php if ($jb2[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom2" value="<?php echo $jl2[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom2" class="check-input" value="E" <?php if ($jb2[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom2" value="<?php echo $jl2[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>

		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom3 as $sk3) {
		  				$ask3 = explode('-', $sk3->soal);
		  				$id3 = "?kolomsoal=KLM03&idkolomjawaban=".$sk3->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id3 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom3a" name="tbsoalkolom3a" value="<?php echo $ask3[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom3b" name="tbsoalkolom3b" value="<?php echo $ask3[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom3c" name="tbsoalkolom3c" value="<?php echo $ask3[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom3d" name="tbsoalkolom3d" value="<?php echo $ask3[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom3e" name="tbsoalkolom3e" value="<?php echo $ask3[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 3</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id3 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom3 as $jl3) {  //initialize
		    						$arrayjawabanlist3 = explode('-', $jl3->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener3 = explode('-', $jl3->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist3 as $listjawaban3) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl3 = explode(' ', $listjawaban3); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener3 as $jb3) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom3" class="check-input" value="A" <?php if ($jb2[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom3" value="<?php echo $jl3[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom3" class="check-input" value="B" <?php if ($jb2[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom3" value="<?php echo $jl3[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom3" class="check-input" value="C" <?php if ($jb2[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom3" value="<?php echo $jl3[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom3" class="check-input" value="D" <?php if ($jb2[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom3" value="<?php echo $jl3[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom3" class="check-input" value="E" <?php if ($jb2[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom3" value="<?php echo $jl3[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>
		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom4 as $sk4) {
		  				$ask4 = explode('-', $sk4->soal);
		  				$id4 = "?kolomsoal=KLM04&idkolomjawaban=".$sk4->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id4 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom4a" name="tbsoalkolom4a" value="<?php echo $ask4[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom4b" name="tbsoalkolom4b" value="<?php echo $ask4[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom4c" name="tbsoalkolom4c" value="<?php echo $ask4[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom4d" name="tbsoalkolom4d" value="<?php echo $ask4[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom4e" name="tbsoalkolom4e" value="<?php echo $ask4[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 4</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id4 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom4 as $jl4) {  //initialize
		    						$arrayjawabanlist4 = explode('-', $jl4->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener4 = explode('-', $jl4->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist4 as $listjawaban4) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl4 = explode(' ', $listjawaban4); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener4 as $jb4) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom4" class="check-input" value="A" <?php if ($jb4[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom4" value="<?php echo $jl4[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom4" class="check-input" value="B" <?php if ($jb4[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom4" value="<?php echo $jl4[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom4" class="check-input" value="C" <?php if ($jb4[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom4" value="<?php echo $jl4[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom4" class="check-input" value="D" <?php if ($jb4[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom4" value="<?php echo $jl4[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom4" class="check-input" value="E" <?php if ($jb4[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom4" value="<?php echo $jl4[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom5 as $sk5) {
		  				$ask5 = explode('-', $sk5->soal);
		  				$id5 = "?kolomsoal=KLM05&idkolomjawaban=".$sk5->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id5 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom5a" name="tbsoalkolom5a" value="<?php echo $ask5[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom5b" name="tbsoalkolom5b" value="<?php echo $ask5[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom5c" name="tbsoalkolom5c" value="<?php echo $ask5[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom5d" name="tbsoalkolom5d" value="<?php echo $ask5[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom5e" name="tbsoalkolom5e" value="<?php echo $ask5[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 5</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id5 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom5 as $jl5) {  //initialize
		    						$arrayjawabanlist5 = explode('-', $jl5->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener5 = explode('-', $jl5->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist5 as $listjawaban5) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl5 = explode(' ', $listjawaban5); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener5 as $jb5) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom5" class="check-input" value="A" <?php if ($jb5[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom5" value="<?php echo $jl5[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom5" class="check-input" value="B" <?php if ($jb5[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom5" value="<?php echo $jl5[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom5" class="check-input" value="C" <?php if ($jb5[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom5" value="<?php echo $jl5[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom5" class="check-input" value="D" <?php if ($jb5[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom5" value="<?php echo $jl5[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom5" class="check-input" value="E" <?php if ($jb5[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom5" value="<?php echo $jl5[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>

		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom6 as $sk6) {
		  				$ask6 = explode('-', $sk6->soal);
		  				$id6 = "?kolomsoal=KLM06&idkolomjawaban=".$sk6->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id6 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom6a" name="tbsoalkolom6a" value="<?php echo $ask6[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom6b" name="tbsoalkolom6b" value="<?php echo $ask6[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom6c" name="tbsoalkolom6c" value="<?php echo $ask6[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom6d" name="tbsoalkolom6d" value="<?php echo $ask6[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom6e" name="tbsoalkolom6e" value="<?php echo $ask6[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 6</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id6 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom6 as $jl6) {  //initialize
		    						$arrayjawabanlist6 = explode('-', $jl6->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener6 = explode('-', $jl6->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist6 as $listjawaban6) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl6 = explode(' ', $listjawaban6); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener6 as $jb6) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom6" class="check-input" value="A" <?php if ($jb6[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom6" value="<?php echo $jl6[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom6" class="check-input" value="B" <?php if ($jb6[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom6" value="<?php echo $jl6[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom6" class="check-input" value="C" <?php if ($jb6[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom6" value="<?php echo $jl6[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom6" class="check-input" value="D" <?php if ($jb6[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom6" value="<?php echo $jl6[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom6" class="check-input" value="E" <?php if ($jb6[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom6" value="<?php echo $jl6[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>

		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom7 as $sk7) {
		  				$ask7 = explode('-', $sk7->soal);
		  				$id7 = "?kolomsoal=KLM07&idkolomjawaban=".$sk7->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id7 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom7a" name="tbsoalkolom7a" value="<?php echo $ask7[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom7b" name="tbsoalkolom7b" value="<?php echo $ask7[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom7c" name="tbsoalkolom7c" value="<?php echo $ask7[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom7d" name="tbsoalkolom7d" value="<?php echo $ask7[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom7e" name="tbsoalkolom7e" value="<?php echo $ask7[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 7</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id6 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom7 as $jl7) {  //initialize
		    						$arrayjawabanlist7 = explode('-', $jl7->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener7 = explode('-', $jl7->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist7 as $listjawaban7) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl7 = explode(' ', $listjawaban7); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener7 as $jb7) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom7" class="check-input" value="A" <?php if ($jb7[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom7" value="<?php echo $jl7[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom7" class="check-input" value="B" <?php if ($jb7[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom7" value="<?php echo $jl7[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom7" class="check-input" value="C" <?php if ($jb7[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom7" value="<?php echo $jl7[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom7" class="check-input" value="D" <?php if ($jb7[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom7" value="<?php echo $jl7[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom7" class="check-input" value="E" <?php if ($jb7[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom7" value="<?php echo $jl7[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>

		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom8 as $sk8) {
		  				$ask8 = explode('-', $sk8->soal);
		  				$id8 = "?kolomsoal=KLM08&idkolomjawaban=".$sk8->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id8 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom8a" name="tbsoalkolom8a" value="<?php echo $ask8[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom8b" name="tbsoalkolom8b" value="<?php echo $ask8[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom8c" name="tbsoalkolom8c" value="<?php echo $ask8[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom8d" name="tbsoalkolom8d" value="<?php echo $ask8[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom8e" name="tbsoalkolom8e" value="<?php echo $ask8[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 8</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id8 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom8 as $jl8) {  //initialize
		    						$arrayjawabanlist8 = explode('-', $jl8->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener8 = explode('-', $jl8->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist8 as $listjawaban8) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl8 = explode(' ', $listjawaban8); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener8 as $jb8) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom8" class="check-input" value="A" <?php if ($jb8[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom8" value="<?php echo $jl8[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom8" class="check-input" value="B" <?php if ($jb8[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom8" value="<?php echo $jl8[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom8" class="check-input" value="C" <?php if ($jb8[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom8" value="<?php echo $jl8[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom8" class="check-input" value="D" <?php if ($jb8[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom8" value="<?php echo $jl8[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom8" class="check-input" value="E" <?php if ($jb8[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom8" value="<?php echo $jl8[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom9 as $sk9) {
		  				$ask9 = explode('-', $sk9->soal);
		  				$id9 = "?kolomsoal=KLM09&idkolomjawaban=".$sk9->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id9 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom9a" name="tbsoalkolom9a" value="<?php echo $ask9[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom9b" name="tbsoalkolom9b" value="<?php echo $ask9[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom9c" name="tbsoalkolom9c" value="<?php echo $ask9[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom9d" name="tbsoalkolom9d" value="<?php echo $ask9[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom9e" name="tbsoalkolom9e" value="<?php echo $ask9[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 9</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id9 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom9 as $jl9) {  //initialize
		    						$arrayjawabanlist9 = explode('-', $jl9->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener9 = explode('-', $jl9->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist9 as $listjawaban9) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl9 = explode(' ', $listjawaban9); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener9 as $jb9) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom9" class="check-input" value="A" <?php if ($jb9[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom9" value="<?php echo $jl9[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom9" class="check-input" value="B" <?php if ($jb9[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom9" value="<?php echo $jl9[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom9" class="check-input" value="C" <?php if ($jb9[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom9" value="<?php echo $jl9[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom9" class="check-input" value="D" <?php if ($jb9[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom9" value="<?php echo $jl9[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom9" class="check-input" value="E" <?php if ($jb9[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom9" value="<?php echo $jl9[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>
		<div class="col-sm-3">
	    	<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
		  		<div class="card-header card-kepala">
		  			<?php foreach ($datajawabanlistkolom10 as $sk10) {
		  				$ask10 = explode('-', $sk10->soal);
		  				$id10 = "?kolomsoal=KLM10&idkolomjawaban=".$sk10->id_kolomjawaban;
					?>
		  			<table class="table table-bordered border-secondary" style="text-align: center;">
						<tr>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatesoal').$id10 ?>" method="post" enctype="multipart/form-data">
								<td><input type="text" class="tbsoal" id="tbsoalkolom10a" name="tbsoalkolom10a" value="<?php echo $ask10[0] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom10b" name="tbsoalkolom10b" value="<?php echo $ask10[1] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom10c" name="tbsoalkolom10c" value="<?php echo $ask10[2] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
								<td><input type="text" class="tbsoal" id="tbsoalkolom10d" name="tbsoalkolom10d" value="<?php echo $ask10[3] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<td><input type="text" class="tbsoal" id="tbsoalkolom10e" name="tbsoalkolom10e" value="<?php echo $ask10[4] ?>" maxlength="1" style="width: 100%;
	    text-align: center;"></td>
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
					<h5 class="card-title" style="text-align: center;">Kolom 10</h5>
		  		</div>
	  			<div class="card-body">
	    			
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id10 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom10 as $jl10) {  //initialize
		    						$arrayjawabanlist10 = explode('-', $jl10->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener10 = explode('-', $jl10->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //untuk cek posisi array dimulai dari 0
									$i = 1;	//untuk penomoran baris
									foreach ($arrayjawabanlist10 as $listjawaban10) {//bagi2 dulu arrayjawaban list yang udah dipisahin minusnya
										$jl10 = explode(' ', $listjawaban10); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener10 as $jb10) { //dibagi2 dulu jawaban benernya yang udah dipisahin berdasarkan minus

										}

										//echo $jb3[0];//FOR DEBUG (Pastikan muncul 1 value)
		    				?>
		    				<tr>
		    					<td width="2">
		    						<?php echo $i; ?>
		    					</td>		
		    					<td>
		    						<div class="radio-form">
		    							<div class="radio-group" style="display: flex; justify-content: space-between;">
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom10" class="check-input" value="A" <?php if ($jb10[$o] == 'A') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-satu">
				    								<input type="text" name="tbabaris<?php echo $i ?>kolom10" value="<?php echo $jl10[0] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom10" class="check-input" value="B" <?php if ($jb10[$o] == 'B') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-dua">
				    								<input type="text" name="tbbbaris<?php echo $i ?>kolom10" value="<?php echo $jl10[1] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom10" class="check-input" value="C" <?php if ($jb10[$o] == 'C') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-tiga">
				    								<input type="text" name="tbcbaris<?php echo $i ?>kolom10" value="<?php echo $jl10[2] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom10" class="check-input" value="D" <?php if ($jb10[$o] == 'D') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom10" value="<?php echo $jl10[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
		    								<div class="radio-choice" style="display: flex; flex-direction: column;">
		    									<input type="radio" name="radiobaris<?php echo $i ?>kolom10" class="check-input" value="E" <?php if ($jb10[$o] == 'E') { echo "checked"; } else { echo ""; }?>>
				    							<label class="form-check-label" for="jawaban-sepuluh">
				    								<input type="text" name="tbebaris<?php echo $i ?>kolom10" value="<?php echo $jl10[4] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2; //menghindari deteksi minus
		    				$i++;	
			    			}

			    		} ?>
	    				</table>
	    				<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 5px; width: 100%; position: sticky; bottom: 10px;" >Update Jawaban</button>
					</form>
	  			</div>
	  		</div>
		</div>
	</div>

</div>