program struktural;
uses crt;
type
	data = record
		nama:string;
		rasa:string;
		stock:integer;
	end;

	adata = record
		adt:array [1..100] of data;
		n,nmax:integer;
	end;
const
	nmax=100;
var
	toko, rasa:string;
	stock,i : integer;
	dt:adata;
	x:char;

begin
	dt.n:=0;
	repeat
	begin
		clrscr;
		writeln('===========================================================');
		writeln('#                                                         #');
		writeln('#                                                         #');
		writeln('#                Program Input Data Stock                 #');
		writeln('#                                                         #');
		writeln('#                                                         #');
		writeln('===========================================================');
		writeln;
		write('Input nama Toko    : ');
		readln(toko);
		write('Input rasa         : ');
		readln(rasa);
		write('Input jumlah stock : ');
		readln(stock);
		
		dt.n:=dt.n+1;
		dt.adt[dt.n].nama:=toko;
		dt.adt[dt.n].rasa:=rasa;
		dt.adt[dt.n].stock:=stock;
		
		writeln;
		writeln;
		
		i:=0;
		writeln('Hasil Inputan : ');
		for i:=1 to dt.n do
		begin
			write(i);
			write('. Nama  : ');
			writeln(dt.adt[i].nama);
			write('  Rasa  : ');
			writeln(dt.adt[i].rasa);
			write('  Stock : ');
			writeln(dt.adt[i].stock);
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