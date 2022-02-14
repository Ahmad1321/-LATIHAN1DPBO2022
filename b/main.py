from TimSepakbola import data

# menggunakan construct
a = data("Real Madrid", "Spanyol", 1902, 25)

a.output()
print("")

# menggunakan set
b = data()
b.settim("Manchester United");
b.setnegara("Inggris");
b.settahun("1878");
b.setjumlah("Christiano Ronaldo");

b.output()
