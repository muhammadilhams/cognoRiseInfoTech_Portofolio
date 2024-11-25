@extends('components.head')

@section('content')
	@php
		$projects = [
		    [
		        'id' => 1,
		        'judul' => 'Pimpinan Daerah Muhammadiyah Pinrang',
		        'link' => 'https://pimpinandaerahmuhammadiyahpinrang.com/',
		        'tanggal' => 'November 2024',
		        'role' => 'Front-end',
		        'technolgy' => 'Laravel',
		        'deskripsi' => 'Hadir untuk memberikan informasi terbaru dan kegiatan Muhammadiyah di Kabupaten Pinrang.',
		    ],
		    [
		        'id' => 2,
		        'judul' => 'Pusat UMKM Kel. Padoang-Doangan',
		        'link' => 'https://sme-padoangdoangan.site/',
		        'tanggal' => 'Mei 2024',
		        'role' => 'Fullstack',
		        'technolgy' => 'Laravel',
		        'deskripsi' =>
		            'Sistem informasi untuk membantu UMKM mendapatkan informasi terbaru terkait bisnis, pemasaran, dan teknologi.',
		    ],
		];

		$experiences = [
		    [
		        'judul' => 'Google Digital Marketing & E-Commerce',
		        'link' => '',
		        'waktu' => 'September 2024',
		        'deskripsi' => 'Earn the Google Digital Marketing & E-commerce
Professional Certificate have completed seven-courses, developed by
Google, that include hands-on, practice-based assessments and are
designed to prepare them for entry-level roles in the field.',
		    ],
		    [
		        'judul' => 'Junior Web Developer',
		        'link' => '',
		        'waktu' => 'May 2024',
		        'deskripsi' =>
		            'Explored the fundamentals of web programming, web design, and translating designs into functional websites, culminating in compelling presentations. Additionally, achieved certification as a junior web developer, marking a significant milestone in skill development.',
		    ],
		    [
		        'judul' => 'IT in Banking',
		        'link' => '',
		        'waktu' => 'November 2023',
		        'deskripsi' =>
		            'Attended a bootcamp focused on Information Technology in banking, where I developed proficiency in various domains such as product management, website development, business architecture, and regulatory IT governance.',
		    ],
		    [
		        'judul' => 'Kampus Mengajar Batch 5 Awardee.',
		        'link' => '',
		        'waktu' => 'June 2023',
		        'deskripsi' =>
		            'Having garnered enriching teaching experience as a Kampus Mengajar Batch 5 Awardee, I have been instrumental in elevating learning outcomes for elementary school students.',
		    ],
		];
	@endphp
	<!-- Kontainer Grid -->
	<div class="flex h-full">

		<!-- Bagian Kiri (Fixed) -->
		<div class="justify flex fixed h-full w-1/2 flex-col justify-between py-28 pl-32">
			
				<div>
					<h1 class="mb-3 text-5xl font-extrabold">Muh. Ilham Saputra J</h1>
					<h2 class="flex flex-col text-lg font-medium hover:text-accent2 lg:flex-row">
						<span>Digital Marketing Enthusiast</span>
						<span class="mx-2 hidden lg:inline-block">|</span>
						<span>Junior Web Developer</span>
					</h2>
				</div>

				<!-- Tombol Navigasi -->
				<nav class="flex  flex-col space-y-4">
					<button onclick="scrollToSection('summary')"
						class="nav-button relative w-40 hover:w-52 p-2 pl-0 text-sm text-white hover:text-accent text-start transition hover:bg-primary">
						Summary
					</button>
					<button onclick="scrollToSection('projects')"
						class="nav-button relative  p-2 pl-0 w-40 text-sm text-white hover:text-accent transition text-start hover:bg-primary">
						Projects
					</button>
					<button onclick="scrollToSection('experience')"
						class="nav-button relative  p-2 pl-0 w-40 text-sm text-white hover:text-accent transition text-start hover:bg-primary">
						Experience
					</button>
				</nav>
				<div class="mt-8 flex space-x-4">
					<!-- Instagram -->
					<a href="https://www.instagram.com/yourusername" target="_blank"
						class="text-2xl text-white transition hover:text-accent">
						<i class="fab fa-instagram"></i>
					</a>
					<!-- LinkedIn -->
					<a href="https://www.linkedin.com/in/yourusername" target="_blank"
						class="text-2xl text-white transition hover:text-accent">
						<i class="fab fa-linkedin"></i>
					</a>
					<!-- Email -->
					<a href="mailto:your-email@example.com" class="text-2xl text-white transition hover:text-accent">
						<i class="fas fa-envelope"></i>
					</a>
					<!-- GitHub -->
					<a href="https://github.com/yourusername" target="_blank" class="text-2xl text-white transition hover:text-accent">
						<i class="fab fa-github"></i>
					</a>
				</div>
			




		</div>
{{-- 
		<!-- Spacer untuk bagian kiri agar layout tidak tertumpuk -->
		<div class="w-1/2"></div> --}}

		<!-- Bagian Kanan (Scrollable) -->
		<div class="ml-auto h-full w-1/2 overflow-y-auto pe-32">
			<section class="">
				{{-- Summary --}}
				<div class="px-5 pt-28" id="summary">
					<p class="text-base">I am an Information Systems graduate from Hasanuddin University with a strong enthusiasm for
						web development and a keen focus on creating user-centric digital solutions. Over the years, I have honed my skills
						in PHP, JavaScript, and Laravel, enabling me to design and develop intuitive websites that cater to both
						functionality and aesthetic appeal. My journey includes hands-on experience in building impactful platforms for
						small businesses and community-driven initiatives, showcasing my ability to transform ideas into meaningful
						outcomes. Beyond technical knowledge, I value collaboration and precision, striving to deliver results that exceed
						expectations.

						Teaching and mentoring have been pivotal parts of my journey. As a Kampus Mengajar Batch 5 Awardee, I gained
						invaluable experience in shaping young minds and enhancing elementary school education. Additionally, my role as a
						mathematics and physics tutor, combined with my time as a Web Programming Lab Assistant, has refined my
						communication and interpersonal skills. These experiences have not only strengthened my ability to explain complex
						concepts in a simplified manner but have also deepened my appreciation for teamwork and problem-solving. With a
						proactive approach to learning and a passion for creating solutions that matter, I am excited to contribute my
						expertise to projects that make a tangible difference.</p>

				</div>

				<!-- Project Container -->
				<div class="pt-28" id="projects">
					<h3 class="px-5 text-2xl font-extrabold text-accent">Project List</h3>
					@foreach ($projects as $item)
						<div
							class="flex justify-between rounded-lg bg-transparent px-5 py-4 transition duration-300 ease-in-out hover:bg-coprimary hover:text-accent hover:shadow-md"
							id="project-container">
							<!-- Flex container untuk judul dan tanggal -->

							{{-- tanggal --}}
							<div class="w-1/4 text-base font-semibold">{{ $item['tanggal'] }}</div>
							<div class="grid w-3/4">
								<!-- Judul -->
								<a href="https://sme-padoangdoangan.site/" target="blank" class="text-base font-semibold hover:underline">
									<h5>{{ $item['judul'] }}</h5>
								</a>
								<!-- Deskripsi -->
								<p class="my-2 text-sm text-gray-400">{{ $item['deskripsi'] }}</p>
								<div class="flex space-x-2">
									<p class="rounded-xl bg-accent bg-opacity-20 p-2 text-xs">{{ $item['role'] }}</p>
									<p class="rounded-xl bg-accent bg-opacity-20 p-2 text-xs">{{ $item['technolgy'] }}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>

				{{-- Experience Container --}}
				<div class="py-28" id="experience">
					<h3 class="px-5 text-2xl font-extrabold text-accent">Experience</h3>
					@foreach ($experiences as $experience)
						<div
							class="flex justify-between rounded-lg bg-transparent px-5 py-4 transition duration-300 ease-in-out hover:bg-coprimary hover:text-accent hover:shadow-md"
							id="project-container">
							<!-- Flex container untuk judul dan tanggal -->

							{{-- tanggal --}}
							<div class="w-1/4 text-base font-semibold">{{ $experience['waktu'] }}</div>
							<div class="grid w-3/4">
								<!-- Judul -->
								<a href="https://sme-padoangdoangan.site/" target="blank" class="text-base font-semibold hover:underline">
									<h5>{{ $experience['judul'] }}</h5>
								</a>
								<!-- Deskripsi -->
								<p class="mt-2 text-sm text-gray-400">{{ $experience['deskripsi'] }}</p>

							</div>
						</div>
					@endforeach
				</div>

			</section>
		</div>

	</div>

	<script>
		function scrollToSection(id) {
			const section = document.getElementById(id);
			if (section) {
				section.scrollIntoView({
					behavior: 'smooth',
					block: 'start'
				});
			}
		}
	</script>
@endsection
