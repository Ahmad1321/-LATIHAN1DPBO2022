#include <iostream>
#include <string>

using namespace std;

class data{
	private:
		string tim;
		string negara;
		int tahun;
		int jumlah;
	
	public:
		data(){}
		
		data(string tim, string negara, int tahun, int jumlah){
			this->tim = tim;
			this->negara = negara;
			this->tahun = tahun;
			this->jumlah = jumlah;
		}
		
		void settim(string tim)
        {
            this->tim = tim;
        }
		string gettim(){
			return this->tim;
		}
		
		void setnegara(string negara){
			this->negara = negara;
		}
		string getnegara(){
			return this->negara;
		}
		
		void settahun(int tahun){
			this->tahun = tahun;
		}
		int gettahun(){
			return this->tahun;
		}
		
		void setjumlah(int jumlah){
			this->jumlah = jumlah;
		}
		int getjumlah(){
			return this->jumlah;
		}
		
		void output(){
			cout << "Nama Tim      : " << this->gettim() << endl;
			cout << "Negara Asal   : " << this->getnegara() << endl;
			cout << "Tahun Berdiri : " << this->gettahun() << endl;
			cout << "Jumlah Pemain : " << this->getjumlah() << endl;
		}
		
		~data(){
		}
};