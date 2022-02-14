public class data{
    // Deklarasi variabel
    private String tim;
    private String negara;
    private int tahun;
    private int jumlah;

    // construct
    public data() {}

    public data(String tim, String negara, int tahun, int jumlah){
        this.tim = tim;
        this.negara = negara;
        this.tahun = tahun;
        this.jumlah = jumlah;
    }

    // set dan get
    public void settim(String tim)
    {
        this.tim = tim;
    }
    public String gettim()
    {
        return this.tim;
    }

    public void setnegara(String negara)
    {
        this.negara = negara;
    }

    public String getnegara()
    {
        return this.negara;
    }

    public void settahun(int tahun)
    {
        this.tahun = tahun;
    }

    public int gettahun()
    {
        return this.tahun;
    }

    public void setjumlah(int jumlah)
    {
        this.jumlah = jumlah;
    }

    public int getjumlah()
    {
        return this.jumlah;
    }

    // output
    public void output()
    {
        System.out.println("Nama Tim      : " + this.gettim());
        System.out.println("Asal Negara   : " + this.getnegara());
        System.out.println("Tahun Berdiri : " + this.gettahun());
        System.out.println("Jumlah Pemain : " + this.getjumlah());
    }
}
