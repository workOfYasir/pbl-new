#include<iostream>
#include<ctime>
#include<fstream>
#include<windows.h>

using namespace std;
// file handling variables
ofstream infile; 
ifstream outfile;


//items class = composte class to confec
// the class item can be a perent class for several classes like sweet items , salty items , 
//liquid items etc as all of the mention classes would have same attributes as class item.
/*
         i t e m s ----------all attributes will be inherited in the following classes
        /    ||   \
      /     ||     \
	/       ||      \ 
 sugary   salty    liquid


*/
class items{
	public:
	string name;
	int quan;
	string expDate;
	string manfDate;
	string prodFac;
	
	//constructor
	items()
	{
		name = " ";
		quan = 0;
		expDate = "";
		manfDate=" ";
		prodFac= " ";
	}
	//get value from admin
	void getVal(string n,int q,string e,string m, string prod)
   {
		name = n;
		quan = q;
		expDate = e;
		manfDate=m;
		prodFac= prod;	
	}
	//hard coded value
	void setVal(string n,int q,string e,string m, string prod)
   {
		name = n;
		quan = q;
		expDate = e;
		manfDate=m;
		prodFac= prod;	
	}
	//display function
	void printItems()
	{
		cout<<endl<<"Name: "<<this->name;
		cout<<endl<<"Quantity: "<<this->quan;
		cout<<endl<<"Expiry date: "<<this->expDate;
		cout<<endl<<"Manufacturing date: "<<this->manfDate;
		cout<<endl<<"Producing factory: "<<this->prodFac<<endl;
	}
	
};
//class purchase = aggregate to confec
class purchase{
//	time_t now = time(0);
//	char* date = ctime(&now);
	public:
	int purDay,purMonth,purYear;
	float purPrice;

	//constructor
	purchase()
	{
	purDay=purMonth=purYear=0;
		purPrice= 0.0;
	}

	//get value from admin
	void setDAtePur(float p,int pD,int pM,int pY)
	{
		purDay=pD;
		purMonth=pM;
		purYear=pY;
		purPrice=p;
	}


	//display function
	void dispPur()
	{
		cout<<"Purchase date: "<<purDay<<"-"<<purMonth<<"-"<<purYear<<endl<<"Purchase price: "<<purPrice<<endl;
	}


};



//class sale = aggregate to confec
class sale{
	public:
	int saleDay,saleMonth,saleYear;
	float salePrice;

	//constructor
	sale()
	{
	saleDay=saleMonth=saleYear=0;
	salePrice= 0.0;
	}

	//get value from admin
	void setDAteSale(float s,int sD,int sM,int sY)
	{
		saleDay=sD;
		saleMonth=sM;
		saleYear=sY;
		salePrice=s;
	}

	//display function
	void dispSale()
	{
		cout<<"Sale date: "<<saleDay<<"-"<<saleMonth<<"-"<<saleYear<<endl<<"Sale price: "<<salePrice<<endl;
	}



	
};


//main confectionary class
class confec{
	items obj1;
	purchase obj2;
	sale obj3;
	
	public:
		
	//constructor
	confec()
	{

	}
	
	//hard coded value
	void setVals(string n,int q,string e,string m, string prod,float p,float s,int pD,int pM,int pY,int sD,int sM,int sY)
	{
		obj1.setVal(n,q,e,m,prod);
		obj2.setDAtePur(p,pD,pM,pY);
		obj3.setDAteSale(s,sD,sM,sY);
	}
		//get value from admin	
	void getVals(string n,int q,string e,string m, string prod,float p,float s,int pD,int pM,int pY,int sD,int sM,int sY)
	{
		obj1.getVal(n,q,e,m,prod);
		obj2.setDAtePur(p,pD,pM,pY);
		obj3.setDAteSale(s,sD,sM,sY);		
	}

	//display function
void print()
	{
		if(obj1.name == " ")
		{
			cout<<"You did not enter any data for print. Add item to print .\n\n";
			Sleep(1500);
		}
		else{
		obj1.printItems();
		obj2.dispPur();
		obj3.dispSale();

			
			
		}

	}
// file handling data write	to file	
	bool file_in()
	{
		if(obj1.name == " ")
		{
			cout<<"You did not enter any data for writing. Add item to write to file.\n\n";
			Sleep(1500);
		}
		else{
		
		ofstream f_i("data.txt",ios::app);
		f_i<< obj1.name << '\n'<< obj1.manfDate << '\n' << obj1.prodFac<< '\n' << obj1.quan << '\n' << obj1.expDate << '\n'<<'\n' ; 
		f_i<< obj2.purDay << '\n' << obj2.purMonth<< '\n' << obj2.purPrice << '\n' << obj2.purYear << '\n' <<'\n'; 
		f_i<< obj3.saleDay << '\n' << obj3.saleMonth<< '\n' << obj3.salePrice << '\n' << obj3.saleYear << '\n' <<'\n';
		f_i.close();
		return true;
	}
	}

// file handling data retreive from file	

		void file_out()
	{
		string ab;
		ifstream f_o("data.txt");
		while(f_o >> ab)
		{
			cout<<ab<<'\n';
		}
		
	}
	
};





int main()
{
const string admin="admin",pass="admin";
string enterPass=" ";

bool cas3;

string itemName;
int itemQuan;
string itemExp;
string itemMan;
string itemProd;
float itemS,itemP;
int itemPD,itemPM,itemPY,itemSD,itemSM,itemSY;

int select=0;

string entry= " ";

confec Obj1;

//copy constructor
confec Obj2=Obj1;

// admin authentication
d:
cout<<"Please enter the password to access the records\n\n";
cout<<"password: ";cin>>enterPass;
// password verification

if (enterPass == pass){
	system("CLS");
	for(int i = 3;i>-1;i--)
	{
		cout<<"wait for "<<i<<" seconds";
		Sleep(1000);
		system("CLS");

	}
}

