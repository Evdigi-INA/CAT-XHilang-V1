<div class="container">
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
	    						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">Update Soal</button>
    						</form>
						</tr>
					</table>
					<?php } ?>
		  		</div>
	  			<div class="card-body">
	    			<h5 class="card-title">Kolom 1</h5>
	    			<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/updatelistjawaban').$id1 ?>" method="post" enctype="multipart/form-data">
		    			<table class="table table-borderless">
		    				<?php
		    					
		    					foreach ($datajawabanlistkolom1 as $jl1) {  //initialize
		    						$arrayjawabanlist1 = explode('-', $jl1->listjawaban); // list-jawaban, pisahkan minusnya
			    					$jawabanbener1 = explode('-', $jl1->jawabanbenar,1); //jawabaanbeneran, pisahkan untuk masing2baris

									$o = 0; //
									$i = 1;	
									foreach ($arrayjawabanlist1 as $listjawaban1) {
										$jl1 = explode(' ', $listjawaban1); //setelah pisahkan minsunya, pisahkan spasi
										foreach ($jawabanbener1 as $jb1) {

										}

										echo $jb1[0];
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
				    							<label class="form-check-label" for="jawaban-empat">
				    								<input type="text" name="tbdbaris<?php echo $i ?>kolom1" id="pilihandbaris<?php echo $i ?>kolom1" value="<?php echo $jl1[3] ?>" maxlength="1" style="width: 28px;
			    text-align: center;">
				    							</label>	
		    								</div>
										</div>	
		    						</div>
		    					</td>
		    				</tr><?php
		    				$o+=2;
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