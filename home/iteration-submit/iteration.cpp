#include<iostream>
#include<ctime>
#include<fstream>
#include<windows.h>

using namespace std;

class items{
	public:
	string name;
	int quan;
	string expDate;
	string manfDate;
	string prodFac;
	
	
	items()
	{
		name = " ";
		quan = 0;
		expDate = "";
		manfDate=" ";
		prodFac= " ";
	}
	
	void getVal(string n,int q,string e,string m, string prod)
   {
		name = n;
		quan = q;
		expDate = e;
		manfDate=m;
		prodFac= prod;	
	}

};

class purchase{
	public:
	int purDay,purMonth,purYear;
	float purPrice;

	purchase()
	{
	purDay=purMonth=purYear=0;
		purPrice= 0.0;
	}

};


class sale{
	public:
	int saleDay,saleMonth,saleYear;
	float salePrice;

	sale()
	{
	saleDay=saleMonth=saleYear=0;
	salePrice= 0.0;
	}

	void setDAteSale(float s,int sD,int sM,int sY)
	{
		saleDay=sD;
		saleMonth=sM;
		saleYear=sY;
		salePrice=s;
	}

	
};


class confec{
	items obj1;
	purchase obj2;
	sale obj3;
	
	public:
		
	confec()
	{

	}
	
	void getVals(string n,int q,string e,string m, string prod,float p,float s,int pD,int pM,int pY,int sD,int sM,int sY)
	{
		obj1.getVal(n,q,e,m,prod);
		obj2.setDAtePur(p,pD,pM,pY);
		obj3.setDAteSale(s,sD,sM,sY);		
	}

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


}

