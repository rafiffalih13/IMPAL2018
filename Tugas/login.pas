program login;

uses crt;
var uname, pass, user, pw: String;
i:integer;


BEGIN
clrscr;
i:=3;

        while i>=1 do begin

        write ('Username = '); readln(uname);
        write ('Password = '); readln(pass);

        user:='deluxetea';
        pw:='1234';

                if(user=uname) and (pw=pass) then
                        begin write('login berhasil');readln;end
                else
                        begin  writeln('Username dan Password yang anda masukkan salah');readln;end;


i:=i-1;
end;
readln;

END.

