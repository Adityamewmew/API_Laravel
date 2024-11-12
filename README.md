LANGKAH-LANGKAH PRAKTIKUM

![Screenshot 2024-11-12 135658](https://github.com/user-attachments/assets/27169c1a-6ef6-40e2-8ba7-eddba1210c13)


![Screenshot 2024-11-12 135730](https://github.com/user-attachments/assets/f6daa20a-6b25-44e2-a242-6cd8e508a079)


![Screenshot 2024-11-12 135848](https://github.com/user-attachments/assets/a527558b-abc4-486b-be2b-2325270ea391)



>Tambahkan	Sanctum's	middleware	di	`app/Http/Kernel.php`


![Screenshot 2024-11-12 140220](https://github.com/user-attachments/assets/9c31f2e8-c816-4cb0-8142-5b7db0e77b7e)



>Emplementasikan	`HasApiTokens`	pada	model	`User`


![Screenshot 2024-11-12 140311](https://github.com/user-attachments/assets/a25a8033-e889-4a58-a40b-ec2f8b5f1e88)


>Tambahkan	metode	registrasi dan login	di	`AuthController`:


![Screenshot 2024-11-12 140701](https://github.com/user-attachments/assets/bdf18815-5c11-40c5-a53f-94677eb1a9c8)


>Buat	model	dan	migration	untuk	`Siswa`


![Screenshot 2024-11-12 141331](https://github.com/user-attachments/assets/3c1f856d-9b43-4cee-b949-3d1c4a1beb26)


![Screenshot 2024-11-12 141620](https://github.com/user-attachments/assets/9bf6597f-1c30-4dbd-9ff6-314b8b250c2b)



>Implementasikan	metode	CRUD	di	`SiswaController`	dengan	error	handling:



![image](https://github.com/user-attachments/assets/044eee77-f945-4a62-b0ef-1239be695d93)





PENGUJIAN API

>REGISTER


![Screenshot 2024-11-12 144818](https://github.com/user-attachments/assets/818d7d58-a845-460f-8c9e-565f8f21afbc)


>LOGIN


![Screenshot 2024-11-12 145032](https://github.com/user-attachments/assets/d68255d5-d8ab-49f6-b3d9-b6dd63583e0f)


>GET


![Screenshot 2024-11-12 145200](https://github.com/user-attachments/assets/3073a244-43a6-41a5-8212-f91078712d04)


>POST


![Screenshot 2024-11-12 145406](https://github.com/user-attachments/assets/9582af6f-8942-44a5-a018-cf14b77887de)


>UPDATE


![Screenshot 2024-11-12 145757](https://github.com/user-attachments/assets/68b59f3b-67d5-46fc-860d-0d6f00969053)


>DELETE


![Screenshot 2024-11-12 150150](https://github.com/user-attachments/assets/6b1694b6-b501-4e9d-a059-7c3a3e357b88)





Tugas Tambahan 
Tambahkan	fitur	validasi	input	yang	lebih	kompleks	dan	tangani	error	dengan	respons	yang	
lebih	informatif.	
• Tambahkan	validasi	untuk	memastikan	bahwa:	
o Nama	siswa	hanya	mengandung	huruf	dan	spasi.	
o Kelas	mengikuti	format	tertentu	(misalnya,	"XII	IPA	1").	
o Umur	berada	dalam	rentang	6	hingga	18	tahun.	
• Respons	Error	yang	Lebih	Informatif:	
o Modifikasi	respons	error	dengan	menambahkan	kode	status	HTTP	dan	
pesan	error	yang	lebih	jelas.	Misalnya,	jika	validasi	gagal,	respons	dapat	
mencakup	detail	kesalahan	yang	spesifik.


>![Screenshot 2024-11-12 152250](https://github.com/user-attachments/assets/be6ec5b2-524c-4e03-9f9e-3362bef8b204)

Jika input data tidak sesuai dengan validasi


>POST


![Screenshot 2024-11-12 152350](https://github.com/user-attachments/assets/d5a23a64-e9e6-4a84-bbc6-b507feb90852)


>UPDATE


![Screenshot 2024-11-12 152639](https://github.com/user-attachments/assets/1b599f87-6f74-4bcd-b25e-66eb65b64ff8)


>GET


![Screenshot 2024-11-12 152653](https://github.com/user-attachments/assets/b3ef8395-fd1f-46cb-8787-1ebab42d8d3e)


>DELETE


![Screenshot 2024-11-12 152708](https://github.com/user-attachments/assets/884e7f8e-bda5-4f47-a783-23c8681b25ef)














