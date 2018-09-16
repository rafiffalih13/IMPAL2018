program input_partner;
uses crt;
type
	partner = record
		username:string;
		namatoko:string;
		alamattoko:string;
	end;

	datapartner = record
		adt:array [1..100] of partner;
		n,nmax:integer;
	end;
const
	nmax=100;
var
	username,nama,alamat:string;
	i : integer;
	dt: datapartner;
	x:char;

begin
	dt.n:=0;
	repeat
	begin
		clrscr;
		writeln('===========================================================');
		writeln('#                                                         #');
		writeln('#                                                         #');
		writeln('#                Program Input Data Partner               #');
		writeln('#                                                         #');
		writeln('#                                                         #');
		writeln('===========================================================');
		writeln;
		write('Input Username    : ');
		readln(username);
		write('Input Nama Toko    : ');
		readln(nama);
		write('Input Alamat Toko         : ');
		readln(alamat);
		
		
		dt.n:=dt.n+1;
		dt.adt[dt.n].username:=username;
		dt.adt[dt.n].namatoko:=nama;
		dt.adt[dt.n].alamattoko:=alamat;
		
		writeln;
		writeln;
		
		i:=0;
		writeln('Hasil Inputan : ');
		for i:=1 to dt.n do
		begin
			write(i);
			write(' Username  : ');
			writeln(dt.adt[i].username);
			write('  Nama Toko  : ');
			writeln(dt.adt[i].namatoko);
			write('  Alamat Toko : ');
			writeln(dt.adt[i].alamattoko);
		end;

		repeat
		begin
			write('Input lagi ? (y/n) : ');
			readln(x);
		end;
		until((x='y')or(x='n'));
	end;
	until(x='n');



end.
