#include "TimSepakbola.cpp"
using namespace std;

int main(){
	
	data a("Real Madrid", "Spanyol", 1902, 25);
	
	a.output();
	
	cout << endl;
	
	data b;
	b.settim("Liverpool");
	b.setnegara("England");
	b.settahun(1892);
	b.setjumlah(34);
	
	b.output();
}