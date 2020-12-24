#include<iostream>
#include<stdio.h>
using namespace std;

class login
{
	private:
	string pin;
	int select = 0;
public:
	
	login()
	{
		pin="null";
		select=0;
	}
	
	login (string p,int s)
	{
		pin=p;
		select=s;
	}
	
	// deep copy constructor
	login (const login &sam)
	{
		pin=sam.pin;
		select=sam.select;
	}
	
	void setpin( string p)
	{
		pin=p;
	}
	void setsel( string s)
	{
		select=s;
	}
	
     string getpin()
     {
     	return pin;
	 }
	 int setsel()
	 {
	 	return select;
	 }
	
};

class menu
{

};
class Billing
{
	private:
		string name;
	int qua;
	int price;
	int total;
	drinks obj;
	food obj1;
	toys obj2;
	clothes obj3;
	electronics obj4;
	grossary obj5;
	medicines obj6;
public:
	billing()
	{
		qua = 0;
		price = 0;
		total = 0;

	}
	void setqua(int qu)
	{
		qua=qa;
	}
		void setprice(int pri)
	{
		price=pri;
	}
		void settotla(int tota)
	{
		total=tota;
	}
	
	
     	int getqua()
	{
	  return qua=;
	}
		int getprice()
	{
		return price;
	}
		int settotla()
	{
		return total;
	}

	void bill()
	{

	}

};
class drinks
{
	private:
		string name[10];
	int price[10];
	string brand[10];
public:
	

	drinks()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			price[i] = 0;
			brand[i] = "";
		}
	}
	void add()
	{
		char ch;
		int i = 0;
		fstream drink;
		drink.open("Drinks.txt", ios::app | ios::in | ios::out);

		do
		{
			cout << "Enter The Record of  Drinks.....!!!!!!\n";
			cout << "Enter the Name of Drink: ";
			cin >> name[i];
			drink << name[i] << "\t\t";

			cout << "Enter the Price of Drink: ";
			cin >> price[i];
			drink << price[i] << "\t\t";

			cout << "Enter the Brand of Drink: ";
			cin >> brand[i];
			drink << brand[i] << "\t\t";

			i++;
			drink << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		drink.close();

	}
	int display()
	{
		system("cls");
		fstream drink("Drinks.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		
		cout << "\t************      Record of Drinks      ********" << endl;
		cout << "   ___________________________________________" << endl;
		cout << " SR.no | Drink Name |  Drink Price  | Drink Brand   " << endl;
		cout << endl;
		while (!drink.eof())
		{
			drink >> name[i] >> price[i] >> brand[i];

			i++;
			count++;

		}
		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << price[i] << " | " << setw(12) << brand[i] << endl;

			cout << "   ___________________________________________" << endl;
		}

		drink.close();
		system("pause");
		system("cls");
		return count;

	}

	void search()
	{
		system("cls");
		fstream drink("Drinks.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		while (!drink.eof())
		{
			drink >> name[i] >> price[i] >> brand[i];
			i++;
			count++;
		}
		drink.close();
		count = count - 1;
	again:
		string name1;

		cout << "Enter The Name Of Drink :";
		cin >> name1;
		for (int i = 0; i < count; i++)
		{
			if (name1 == name[i])
			{
				cout << "\t***************      Record of Drinks      ***********" << endl;
				cout << " \t  ___________________________________________" << endl;
				cout << " \tSR.no | Drink Name |  Drink Price  | Drink Brand   " << endl;
				cout << "       " << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << price[i] << " | " << setw(6) << brand[i] << endl;
				cout << "  \t  ___________________________________________" << endl;
				break;
			}
			else if (i == count - 1) {
				cout << "There is not any data related to this input...!\n";
			}
		}
		system("pause");
		system("cls");
	}
	int rem()
	{
		fstream drinks;
		int count = 0;
		string name1;
		drinks.open("Drinks.txt", ios::in | ios::out | ios::app);
		int i = 0;
		count = display();

		drinks.close();

		remove("Drinks.txt");

		drinks.open("Drinks.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {

				cout << "Record is Deleted...!!!";

				i++;

			}
			drinks << name[i] << "\t\t" << price[i] << "\t\t" << brand[i] << endl;

		}

		drinks.close();
		display();
		cout << endl;
		system("cls");
		return count;
	}
};

class electronics
{
	private:
		string name[10];
	string brand[10];
	int price[10];
public:
	electronics()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			brand[i] = "";
			price[i] = 0;
		}
	}
	void add()
	{
		char ch;
		int i = 0;
		fstream electronics;
		electronics.open("electronics.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of the Product.....!!!!!!\n";
			cout << "Enter the Name of Product: ";
			cin >> name[i];
			electronics << name[i] << "\t\t";

			cout << "Enter the Brand of Product: ";
			cin >> brand[i];
			electronics << brand[i] << "\t\t";

			cout << "Enter the Price of Product: ";
			cin >> price[i];
			electronics << price[i] << "\t\t";

			i++;
			electronics << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		electronics.close();
	}
	int display()
	{
		system("cls");
		fstream electronics("electronics.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		
		cout << "\t***********      Record of ELectronic      ****************" << endl;
		cout << "   ___________________________________________________________" << endl;
		cout << " SR.no | ELectronic Name |  ELectronic Brand  | ELectronic Price  " << endl;
		cout << endl;
		while (!electronics.eof())
		{
			electronics >> name[i] >> brand[i] >> price[i];

			i++;
			count++;

		}

		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << endl;
			cout << endl;
			cout << "   ___________________________________________________________" << endl;
		}

		electronics.close();
		system("pause");
		system("cls");
		return count;

	}
	void search()
	{
		system("cls");
		fstream electronics("electronics.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		while (!electronics.eof())
		{
			electronics >> name[i] >> brand[i] >> price[i];

			i++;
			count++;

		}
		electronics.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Brand\n" << endl;
		int z;
		string name1, brand1;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Device :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t***********      Record of ELectronic      ****************" << endl;
					cout << "   ___________________________________________________________" << endl;
					cout << " SR.no | ELectronic Name |  ELectronic Brand  | ELectronic Price  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(15) << name[i] << " | " << setw(18) << brand[i] << " | " << setw(12) << price[i] << endl;
					cout << endl;
					cout << "   ___________________________________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Brand of Device :";
			cin >> brand1;
			for (int i = 0; i < count; i++)
			{
				if (brand1 == brand[i])
				{
					cout << "\t***********      Record of ELectronic      ****************" << endl;
					cout << "   ___________________________________________________________" << endl;
					cout << " SR.no | ELectronic Name |  ELectronic Brand  | ELectronic Price  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << endl;
					cout << endl;
					cout << "   ___________________________________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;

		default:
			cout << "Invalid choice..!\n";
			cout << "Enter Again..!\n";
			system("cls");
			break;
		}
		system("pause");
		goto again;
		system("cls");

	}
	int rem()
	{
		string name1;
		int count = 0;
		fstream electronic;

		electronic.open("electronics.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		electronic.close();

		remove("electronics.txt");

		electronic.open("electronics.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {

				cout << "Record is Deleted...!!!";

				i++;

			}
			electronic << name[i] << "\t\t" << brand[i] << "\t\t" << price[i] << endl;

		}

		electronic.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;

	}

};

class food
{
	private:
		string name[10];
	int price[10];
	string type[10];
public:
	food()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			price[i] = 0;
			type[i] = "";
		}

	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}
};

class medicines
{
	private:
		string name[10];
	int price[10];
	string brand[10];
	string type[10];
public:
	medicines()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			price[i] = 0;
			brand[i] = "";
			type[i] = "";
		}
		
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class makeup
{
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class grossry
{
	private:
		string name[10];
	int price[10];
	string type[10];
public:
	grossary()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			type[i] = "";
			price[i] = 0;
		}

	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class toys
{
	private:
	string name[10];
	int price[10];

public:
	toys()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = ""; 
			price[i] = 0;
		}

	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};
class clothes
{
	private:
		string name[10];
	int price[10];
	string type[10];
	string brand[10];
public:
	clothes()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			price[i] = 0;
			type[i] = "";
			brand[i] = "";
		}
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}
};

class manager
{
	private:
		string name[10];
	int age[10];
	int ID[10];
public:
	manager()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			age[i] = 0;
			ID[i] = 0;

		}
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class salesman
{
	private:
		string name[10];
	int age[10];
	int ID[10];
public:
	salesman()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			age[i] = 0;
			ID[i] = 0;
		}
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class cashier
{
	private:
		string name[10];
	int age[10];
	int ID[10];
public:
	cashier()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			age[i] = 0;
			ID[i] = 0;
		}
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class peon
{
	private:
		string name[10];
	int age[10];
	int ID[10];
public:
	salesman()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			age[i] = 0;
			ID[i] = 0;
		}
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};

class sguard
{
	private:
		string name[10];
	int age[10];
	int ID[10];
public:
	guard()
	{
		for (int i = 0; i < 10; i++)
		{
			name[i] = "";
			age[i] = 0;
			ID[i] = 0;
		}
	}
	void add()
	{

	}

	void display()
	{

	}

	void remove()
	{

	}

	void edit()
	{

	}

	void search()
	{

	}

};
class managment
{
	private:
		int select;
    public:
    	managment()
    	{
    		select=0;
		}
		
		void setselect(int sel)
		{
			select=sel;
		}
		
		int getselect()
		{
			return select;
		}
};
