import java.util.*;

public class Main
{
    public static void main(String[] args)
    {
        // menggunakan construct
        data a = new data("Real Madrid", "Spanyol", 1902, 25);
	
	//Output
	a.printOut();
        System.out.println();
		
        // menggunakan set
        data b = new data();
        b.settim("Liverpool");
        b.setnegara("England");
        b.settahun(1892);
        b.setjumlah(34);
	
	//Output
        b.printOut();
    }
}
