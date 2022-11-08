@extends('layouts.main')

@section('container')
<section style="height: 60px">

</section>

<div id="contact" class="contact-area section-padding">
	<div class="container">										
		<div class="section-title text-center mt-3 ">
			<h1>Hubungi Kami</h1>
			<p>Sekretariat Gereja Kemah Injil Indonesia Kecamatan Sekadau, Kabupaten Sekadau</p>
            
		</div>					
		<div class="row">
			<div class="col-lg-7">	
				<div class="contact">
					<form action="/pesan" method="post" class="contactform contact_form" id="contact_form">
                        @csrf
						<div class="row">
							<div class="form-group col-md-6 mb-3">
								<input type="text" name ="nama" class="form-control" placeholder="Nama" required="required">
							</div>
							<div class="form-group col-md-6 mb-3">
								<input type="email" name="email" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group col-md-12 mb-3">
								<input type="text" name="subjek" class="form-control" placeholder="Subjek" required="required">
							</div>
							<div class="form-group col-md-12 mb-3">
								<textarea rows="6" name="pesan" class="form-control" placeholder="Kritik dan Saran" required="required"></textarea>
							</div>
							<div class="col-md-12 text-center mt-2 mb-5">
                                <button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Hubungi Kami</button>
							</div>
						</div>
					</form>
				</div>
			</div><!--- END COL --> 
			<div class="col-lg-5">
				<div class="single_address">
					<i class="bi bi-geo-alt-fill"></i>
					<h4>Alamat</h4>
					<p>Jalan Keling Kumang Desa Mungguk Kec. Sekadau Hilir</p>
				</div>
				<div class="single_address">
					<i class="bi bi-envelope"></i>
					<h4>Email</h4>
					<p>{{ $kontak->email }}</p>
				</div>
				<div class="single_address">
					<i class="bi bi-telephone"></i>
					<h4>No Phone</h4>
					<p>Gembala 1 ({{ $kontak->nophone1 }})
                    <br>Gembala 2 ({{ $kontak->nophone2}}) 
                    <br>Staf TU ({{ $kontak->nophone3}})</p>
				</div>
				<div class="single_address">
					<i class="bi bi-facebook"></i>
					<h4>Facebook</h4>
					<p>{{ $kontak->facebook}}</p>
				</div>					
			</div><!--- END COL --> 
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->	
</div>
@endsection