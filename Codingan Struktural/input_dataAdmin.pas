program input_dataAdmin;
uses crt;
type

	admin = record
		nama : string;
		username : string;
		password : string;
		nomorhp : string;
		dataStock : stock;
		passwordpartner : string;
	end;

	dataAdmin = record
		adadm : array [1..100] of admin;
		n,nmax:integer;
	end;

	
const
	nmax=100;
var
	namaAdmin, username, passAdmin, no_hp : string;
	i : integer;
	dadm : dataAdmin;
	c : char;

begin
	dadm.n:=0;
	repeat
	begin
		clrscr;
		writeln('===========================================================');
		writeln('#                                                         #');
		writeln('#                                                         #');
		writeln('#                Program Input Data Admin                 #');
		writeln('#                                                         #');
		writeln('#                                                         #');
		writeln('===========================================================');
		writeln;
		write('Input Nama Admin    : ');
		readln(namaAdmin);
		write('Input Username    : ');
		readln(username);
		write('Input Password Admin         : ');
		readln(passAdmin);
		write('Input Nomor HP Admin : ');
		readln(no_hp);
		
		
		dadm.n:=dadm.n+1;
		dadm.adadm[dadm.n].nama:=namaAdmin;
		dadm.adadm[dadm.n].username:=username;
		dadm.adadm[dadm.n].password:=passAdmin;
		dadm.adadm[dadm.n].nomorhp:=no_hp;
		
		writeln;
		writeln;
		
		i:=0;
		writeln('Hasil Inputan Data Admin : ');
		for i:=1 to dadm.n do
		begin
			write(i);
			write('  Nama Admin  : ');
			writeln(dadm.adadm[i].nama);
			write(' Username Admin : ');
			writeln(dadm.adadm[i].username);
			write('  Password Admin : ');
			writeln(dadm.adadm[i].password);
			write('  Nomor HP Admin : ');
			writeln(dadm.adadm[i].nomorhp);
		end;

		repeat
		begin
			write('Input lagi ? (y/n) : ');
			readln(c);
		end;
		until((c='y')or(c='n'));
	end;
	until(c='n');



end.