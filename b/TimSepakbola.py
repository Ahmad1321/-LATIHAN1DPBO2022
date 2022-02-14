class data():
    #Deklarasi Variabel
    __tim = ""
    __negara = ""
    __tahun = 0
    __jumlah = 0    #jumlah pemain

    # construct
    def __init__(self, tim = "", negara = "", tahun = 0, jumlah  = 0):
        self.__tim = tim
        self.__negara = negara
        self.__tahun = tahun
        self.__jumlah = jumlah

    # set dan get
    def settim(self, tim):
        self.__tim = tim

    def gettim(self):
        return self.__tim
    
    def setnegara(self, negara):
        self.__negara = negara
    
    def getnegara(self):
        return self.__negara

    def settahun(self, tahun):
        self.__tahun = tahun
    
    def gettahun(self):
        return self.__tahun

    def setjumlah(self, jumlah):
        self.__jumlah = jumlah
    
    def getjumlah(self):
        return self.__jumlah

    # print output
    def output(self):
        print("Nama Tim         : " + str(self.__nama))
        print("Asal Negara      : " + str(self.__asalNegara))
        print("Tahun Berdiri    : " + str(self.__tahunBerdiri))
        print("Pemain           : " + str(self.__pemain))
