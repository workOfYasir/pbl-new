#include<iostream>
#include<cstring>
#include<fstream>
#include<math.h>

using namespace std;

class customer{
protected:
	
	string cus_id,cus_order_id;
	string password,cpass;
	
	public:
	
	string setcus_id (string s)
	{
		cus_id=s;
	}
		string getcus_id()
    {
	return cus_id;
    }
   void login()
   {
   }
   void signup()
   {
   	
   }
   	void exit()
	{
     cout<<"\n\n\t\t*********thank you**********\n\n";
	}
   int select_resturant(int no)
   {	
	
   }
   int payment(int amount)
   {
	
   }
	
   };
   class person{
	customer obj1;
	protected:
	string name,f_name,address,ph_no,e_mail;
	public:
	void setname(string n)
	{
		name=n;
	}
	void setfname(string f)
	{
		f_name=f;
	}
	void setaddress(string add)
	{
		address=add;
	}
	void setph_no(string p)
	{
		ph_no=p;
	}
	void setemail(string e)
	{
		e_mail=e;
	}
	string getname()
{
	return name;
}
	string getfname()
{
	return f_name;
}
	string getaddress()
{
	return address;
}
	string getphno()
{
	return ph_no;
}
	string getemail()
{
	return e_mail;
}

};

person (string n, string f)
{
	name = n;
	f_name = f;
	
}
person (const person &t)
{
	name = t.name;
	f_name = t.f_name;
}
 
class order{
	customer obj2;
	int total_price,order_id,code;
	string getd;
		int pid,pprice,pquantity;
 	string pname;
	public:
		void menu1()
		{
	
		}
		
		void menu2()
		{
	
		}
		void menu3()
		{
		}
		void menu4()
		{
		}
};

class admin: {
	
	int pid,b1,a1,p1;
	string n1;
	public:
	
	
	void up()
	    { 
		
		}	
	void addresturant()
		{
			
		}
	void menu()
	{
	}
	void update(){
		
	}
	void search(){
		
       }
	    
void deletee(){
	
    }
    void showrecord()
    {
    	
	}
	void exit()
	{
     cout<<"\n\n\t\t*********thank you**********\n\n";
	}
};
class resturant{
	
	order obj3;
	
	public:
		int checkresturant(int n)
		{
			
		}
		void checkorder()
		{  
		}
		bool delivery_the_order()
		{	
		}
};

int main(){
	
	person obj1 (ramail,javaid);
	person obj2 = obj1;
	
	system("pause");
	return 0;
}

