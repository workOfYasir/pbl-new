#include<iostream>
#include<windows.h>
#include<string>
#include<fstream>
#include<iomanip>
#include<stdio.h>
#include<conio.h>

using namespace std;

class toys
{
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
	void addtoy()
	{
		char ch;
		int i = 0;
		fstream toys;
		toys.open("Toys.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of Toys.....!!!!!!\n" << endl;
			cout << "Enter the Name of Toy: " << endl;
			cin >> name[i];
			toys << name[i] << "\t\t";

			cout << "Enter the Price of Toy: " << endl;
			cin >> price[i];
			toys << price[i] << "\t\t";

			i++;
			toys << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		toys.close();
	}
	int displaytoy()
	{
		system("cls");
		fstream toys("Toys.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;

		
		cout << "\t****      Record of Toys   ****" << endl;
		cout << "   _____________________________" << endl;
		cout << " SR.no |  Food Name | Food Price  " << endl;
		cout << endl;

		
		while (!toys.eof())
		{
			toys >> name[i] >> price[i];

			i++;
			count++;

		}
		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << endl;
			cout << "   _____________________________" << endl;
		}

		toys.close();
		system("pause");
		system("cls");
		return count;
	}

	void searchtoy()
	{
		system("cls");
		fstream toys("Toys.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		while (!toys.eof())
		{
			toys >> name[i] >> price[i];

			i++;
			count++;
		}
		toys.close();
		count = count - 1;
	again:
		cout << "What do you want to Searching with " << endl;
		cout << " 1- Name\n " << endl;
		int z;
		string name1;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Drink :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					system("cls");
					cout << "\t****      Record of Toys   ****" << endl;
					cout << "\t   _____________________________" << endl;
					cout << " \tSR.no |  Food Name | Food Price  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << endl;
					cout << " \t  _____________________________" << endl;
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
		system("cls");
	}
	int remtoy()
	{
		string name1;
		int count = 0;
		fstream toys;

		toys.open("Toys.txt", ios::in | ios::out);
		int i = 0;
		count = displaytoy();

		toys.close();

		remove("Toys.txt");

		toys.open("Toys.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++)
		{

			if (name1 == name[i])
			{
				cout << "Record is Deleted...!!!";
				i++;
			}
			toys << name[i] << "\t\t" << price[i] << endl;

		}

		toys.close();
		displaytoy();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}
};
class grossary
{
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

		char ch;
		int i = 0;
		fstream grossary;
		grossary.open("Grossary.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of Grossary.....!!!!!!\n" << endl;
			cout << "Enter the Name of Grossary: " << endl;
			cin >> name[i];
			grossary << name[i] << "\t\t";

			cout << "Enter the Price of Grossary: " << endl;
			cin >> price[i];
			grossary << price[i] << "\t\t";

			cout << "Enter the Type of Grossary: " << endl;
			cin >> type[i];
			grossary << type[i] << "\t\t";

			i++;
			grossary << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		grossary.close();
	}
	int display()
	{
		string name[10];
		int price[10];
		string type[10];

		system("cls");
		fstream grossary("Grossary.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;

		cout << "\t************      Record of Grossary   *************" << endl;
		cout << "\t   ___________________________________________________" << endl;
		cout << "\t SR.no |  Grossary Name | Grossary Price | Grossary type" << endl;
		cout << endl;

		

		while (!grossary.eof())
		{
			grossary >> name[i] >> price[i] >> type[i];

			i++;
			count++;

		}
		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
			cout << "\t   ___________________________________________________" << endl;
		}

		grossary.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream grossary("Grossary.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		while (!grossary.eof())
		{
			grossary >> name[i] >> price[i] >> type[i];

			i++;
			count++;
		}
		grossary.close();
		count = count - 1;
	again:
		cout << "What do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Type" << endl;
		int z;
		string name1, type1;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Grossary :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					system("cls");
					cout << "\t************      Record of Grossary   *************" << endl;
					cout << "\t   ___________________________________________________" << endl;
					cout << "\t SR.no |  Grossary Name | Grossary Price | Grossary type" << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
					cout << "\t   ___________________________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;

		case 2:
			cout << "Enter The Type Of Grossary :";
			cin >> type1;
			for (int i = 0; i < count; i++)
			{
				if (type1 == type[i])
				{
					system("cls");
					cout << "\t****      Record of Toys   ****" << endl;
					cout << "\t   _____________________________" << endl;
					cout << " \tSR.no |  Food Name | Food Price  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << endl;
					cout << " \t  _____________________________" << endl;
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
		system("cls");
	}
	int rem()
	{
		string name[10];
		int price[10];
		string type[10];
		string name1;
		int count = 0;
		fstream grossary;

		grossary.open("Grossary.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		grossary.close();

		remove("Grossary.txt");

		grossary.open("Grossary.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++)
		{

			if (name1 == name[i])
			{
				cout << "Record is Deleted...!!!";
				i++;
			}
			grossary << name[i] << "\t\t" << price[i] << "\t\t" << type[i] << endl;

		}

		grossary.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}
};
class clothes
{
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
		char ch;
		int i = 0;
		fstream clothes;
		clothes.open("clothes.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of  Clothes.....!!!!!!\n" << endl;
			cout << "Enter the Name of Cloth: " << endl;
			cin >> name[i];
			clothes << name[i] << "\t\t";

			cout << "Enter the Brand of Cloth: " << endl;
			cin >> brand[i];
			clothes << brand[i] << "\t\t";

			cout << "Enter the Price of Cloth: " << endl;
			cin >> price[i];
			clothes << price[i] << "\t\t";

			cout << "Enter the Type of Drink: " << endl;
			cin >> type[i];
			clothes << type[i] << "\t\t";

			i++;
			clothes << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		clothes.close();
	}
	int display()
	{
		system("cls");
		fstream clothes("clothes.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		cout << endl;
		cout << "\t*****************      Record of Clothes      *************" << endl;
		cout << "   __________________________________________________________" << endl;
		cout << " SR.no | Cloth Name |  Cloth Brand  | Cloth Price  |  Cloth Type  " << endl;
		cout << endl;

		

		while (!clothes.eof())
		{
			clothes >> name[i] >> brand[i] >> price[i] >> type[i];

			i++;
			count++;

		}
		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
			cout << endl;
			cout << "   __________________________________________________________" << endl;
		}

		clothes.close();
		system("pause");
		system("cls");
		return count;
	}
	void search()
	{
		system("cls");
		fstream clothes("clothes.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		while (!clothes.eof())
		{
			clothes >> name[i] >> brand[i] >> price[i] >> type[i];

			i++;
			count++;
		}
		clothes.close();
		count = count - 1;
	again:
		cout << "What do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Brand" << endl;
		int z;
		string name1, brand1;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Cloth :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t*****************      Record of Clothes      *************" << endl;
					cout << "   __________________________________________________________" << endl;
					cout << " SR.no | Cloth Name |  Cloth Brand  | Cloth Price  |  Cloth Type  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
					cout << endl;
					cout << "   __________________________________________________________" << endl;

					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Brand of the Cloth :";
			cin >> brand1;
			for (int i = 0; i < count; i++)
			{
				if (brand1 == brand[i])
				{
					cout << "\t*****************      Record of Clothes      *************" << endl;
					cout << "   __________________________________________________________" << endl;
					cout << " SR.no | Cloth Name |  Cloth Brand  | Cloth Price  |  Cloth Type  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
					cout << endl;
					cout << "   __________________________________________________________" << endl;
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
		system("cls");
	}
	int rem()
	{
		string name1;
		int count = 0;
		fstream cloth;
		cloth.open("clothes.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		cloth.close();

		remove("clothes.txt");

		cloth.open("clothes.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++)
		{
			if (name1 == name[i])
			{
				cout << "Record is Deleted...!!!";
				i++;

			}
			cloth << name[i] << "\t\t" << brand[i] << "\t\t" << price[i] << "\t\t" << type[i];

		}

		cloth.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}

};
class medicines
{
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
		char ch;
		int i = 0;
		fstream medicines;
		medicines.open("Medicines.txt", ios::app | ios::in | ios::out);

		do
		{
			cout << "Enter The Record of the Product.....!!!!!!\n";
			cout << "Enter the Name of Medicines: ";
			cin >> name[i];
			medicines << name[i] << "\t\t";

			cout << "Enter the Brand of Medicines: ";
			cin >> brand[i];
			medicines << brand[i] << "\t\t";

			cout << "Enter the Price of Medicines: ";
			cin >> price[i];
			medicines << price[i] << "\t\t";

			cout << "Enter the Type of Medicines: ";
			cin >> type[i];
			medicines << type[i] << "\t\t";

			i++;
			medicines << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		medicines.close();

	}
	int display()
	{
		system("cls");
		fstream medicines("Medicines.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		cout << "\t***************      Record of Medicines      ***********" << endl;
		cout << "   ______________________________________________________________________" << endl;
		cout << " SR.no |  Medicine Name |  Medicine Brand  | Medicine Price  |  Medicine Type " << endl;
		cout << endl;

	

		while (!medicines.eof())
		{
			medicines >> name[i] >> brand[i] >> price[i] >> type[i];

			i++;
			count++;

		}
		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;

			cout << "   ______________________________________________________________________" << endl;
		}

		medicines.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream medicines("Medicines.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		while (!medicines.eof())
		{
			medicines >> name[i] >> brand[i] >> price[i] >> type[i];

			i++;
			count++;

		}
		medicines.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Brand\n 3- Type\n" << endl;
		int z;
		string name1, brand1, type1;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Medicines :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t***************      Record of Medicines      ***********" << endl;
					cout << "   ______________________________________________________________________" << endl;
					cout << " SR.no |  Medicine Name |  Medicine Brand  | Medicine Price  |  Medicine Type " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
					cout << "   ______________________________________________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Brand of Medicines :";
			cin >> brand1;
			for (int i = 0; i < count; i++)
			{
				if (brand1 == brand[i])
				{
					cout << "\t***************      Record of Medicines      ***********" << endl;
					cout << "   ______________________________________________________________________" << endl;
					cout << " SR.no |  Medicine Name |  Medicine Brand  | Medicine Price  |  Medicine Type " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
					cout << "   ______________________________________________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 3:
			cout << "Enter The type Of Medicines :";
			cin >> type1;
			for (int i = 0; i < count; i++)
			{
				if (type1 == type[i])
				{
					cout << "\t***************      Record of Medicines      ***********" << endl;
					cout << "   ______________________________________________________________________" << endl;
					cout << " SR.no |  Medicine Name |  Medicine Brand  | Medicine Price  |  Medicine Type " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << brand[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i] << endl;
					cout << "   ______________________________________________________________________" << endl;
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
		fstream medicine;
		medicine.open("Medicines.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		medicine.close();

		remove("Medicines.txt");

		medicine.open("Medicines.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {

				cout << "Record is Deleted...!!!";

				i++;

			}
			medicine << name[i] << "\t\t" << brand[i] << "\t\t" << price[i] << "\t\t" << type[i] << endl;

		}

		medicine.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;

	}

};
class food
{
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
		char ch;
		int i = 0;
		fstream fooditems;
		fooditems.open("Food Items.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of the Product.....!!!!!!\n";
			cout << "Enter the Name of Food: ";
			cin >> name[i];
			fooditems << name[i] << "\t\t";

			cout << "Enter the Price of Food: ";
			cin >> price[i];
			fooditems << price[i] << "\t\t";

			cout << "Enter the Type of Food: ";
			cin >> type[i];
			fooditems << type[i] << "\t\t";

			i++;
			fooditems << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		fooditems.close();

	}
	int display()
	{
		system("cls");
		fstream fooditems("Food Items.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		cout << "\t********      Record of Food      *******" << endl;
		cout << "   ________________________________________" << endl;
		cout << " SR.no |  Food Name | Food Price  |  Food Type  " << endl;
		cout << endl;
		while (!fooditems.eof())
		{
			fooditems >> name[i] >> price[i] >> type[i];

			i++;
			count++;

		}
		count = count - 1;

		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i];

			cout << "   ________________________________________" << endl;
		}

		fooditems.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream fooditems("Food Items.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;

		while (!fooditems.eof())
		{
			fooditems >> name[i] >> price[i] >> type[i];

			i++;
			count++;

		}
		fooditems.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Brand\n 3- Type\n" << endl;
		int z;
		string name1, type1;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Food Item :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t********      Record of Food      *******" << endl;
					cout << "   ________________________________________" << endl;
					cout << " SR.no |  Food Name | Food Price  |  Food Type  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i];
					cout << "   ________________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;

		case 2:
			cout << "Enter The type Of Food Item :";
			cin >> type1;
			for (int i = 0; i < count; i++)
			{
				if (type1 == type[i])
				{
					cout << "\t********      Record of Food      *******" << endl;
					cout << "   ________________________________________" << endl;
					cout << " SR.no |  Food Name | Food Price  |  Food Type  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(12) << price[i] << " | " << setw(12) << type[i];
					cout << "   ________________________________________" << endl;
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
		fstream fooditem;

		fooditem.open("Food Items.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		fooditem.close();

		remove("Food Items.txt");

		fooditem.open("Food Items.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {
				cout << "Record is Deleted...!!!";
				i++;
			}
			fooditem << name[i] << "\t\t" << price[i] << "\t\t" << type[i] << "\t\t" << endl;

		}

		fooditem.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}

};
class drinks
{
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

class menu //this is parent class of management ,login,inventry  class
{
public:
	void starting_page()
	{
		system("cls");
		system("color b2");

		cout << "\n\n\n";
		cout << "\t\t\t\t SUPER MARKET MANAGEMENT SYSTEM" << endl;
		cout << "\n\n\t MADE BY" << endl;
		cout << "\n\t\t\t\t USMAN MALIK. (ROLL#-072)" << endl;
	
		cout << "\n\t\t\t\t AMNA ZAHOOR (ROLL#-061)" << endl;
		cout << "\n\n\n\tSUBMITTED TO" << endl;
		cout << "\n\t\t\t\t SIR ZAMAN " << endl;
		cout << "\n\n\t\t PRESS ANY KEY TO GO TO LOGIN" << endl;
		//there it calls the class of login after pressing key 

	}


	//intro of project and group members
};

class manager
{
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
		char ch;
		int i = 0;
		fstream manager;
		manager.open("Manager.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of the Manager.....!!!!!!\n";
			cout << "Enter the Name: ";
			cin >> name[i];
			manager << name[i] << "\t\t";

			cout << "Enter the Age: ";
			cin >> age[i];
			manager << age[i] << "\t\t";

			cout << "Enter the Id: ";
			cin >> ID[i];
			manager << ID[i] << "\t\t";

			i++;
			manager << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		manager.close();
	}

	int display()
	{
		system("cls");
		fstream manager("Manager.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		
		cout << "\t\t****      Record of Manager      ****" << endl;
		cout << "  \t _______________________________" << endl;
		cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
		cout << endl;
		while (!manager.eof())
		{
			manager >> name[i] >> age[i] >> ID[i];

			i++;
			count++;

		}

		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;

			cout << "  \t _______________________________" << endl;
		}

		manager.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream manager("Manager.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		while (!manager.eof())
		{
			manager >> name[i] >> age[i] >> ID[i];
			i++;
			count++;
		}
		manager.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Id" << endl;
		int z;
		string name1;
		int id;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Manager :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t\t****      Record of Manager      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Id of Manager :";
			cin >> id;
			for (int i = 0; i < count; i++)
			{
				if (id == ID[i])
				{
					cout << "\t\t****      Record of Manager      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
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
		fstream managers;
		managers.open("Manager.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		managers.close();

		remove("Manager.txt");

		managers.open("Manager.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i])
			{
				cout << "Record is Deleted...!!!";
				i++;
			}
			managers << name[i] << "\t\t" << age[i] << "\t\t" << ID[i] << endl;
		}

		managers.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}

};

class salesman
{
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
		char ch;
		int i = 0;
		fstream salesman;
		salesman.open("Sales Man.txt", ios::app | ios::in | ios::out);
		do
		{

			cout << "Enter The Record of the sales man.....!!!!!!\n";
			cout << "Enter the Name of Sales Man: ";
			cin >> name[i];
			salesman << name[i] << "\t\t";

			cout << "Enter the Age of Salesman: ";
			cin >> age[i];
			salesman << age[i] << "\t\t";

			cout << "Enter the Id of Sales Man: ";
			cin >> ID[i];
			salesman << ID[i] << "\t\t";

			i++;
			salesman << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		salesman.close();
	}

	int display()
	{

		system("cls");
		fstream salesman("Sales Man.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;

		cout << "\t***      Record of Sales Man      ***" << endl;
		cout << " \t  _________________________________" << endl;
		cout << " \tSR.no |    Name    |   Age   |   Id   " << endl;
		cout << endl;

		while (!salesman.eof())
		{
			salesman >> name[i] >> age[i] >> ID[i];

			i++;
			count++;

		}

		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;

			cout << " \t  _________________________________" << endl;
		}

		salesman.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream salesman("Sales Man.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		while (!salesman.eof())
		{
			salesman >> name[i] >> age[i] >> ID[i];
			i++;
			count++;

		}
		salesman.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Id" << endl;
		int z;
		string name1;
		int id;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Sales Man :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t***      Record of Sales Man      ***" << endl;
					cout << " \t  _________________________________" << endl;
					cout << " \tSR.no |    Name    |   Age   |   Id   " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << " \t  _________________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Id of Sales Man :";
			cin >> id;
			for (int i = 0; i < count; i++)
			{
				if (id == ID[i])
				{
					cout << "\t***      Record of Sales Man      ***" << endl;
					cout << " \t  _________________________________" << endl;
					cout << " \tSR.no |    Name    |   Age   |   Id   " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << " \t  _________________________________" << endl;
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
		fstream saleman;

		saleman.open("Sales Man.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		saleman.close();

		remove("Sales Man.txt");

		saleman.open("Sales Man.txt", ios::out);

		cout << "Enter the Name you want to Delete :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {
				cout << "Record is Deleted...!!!";

				i++;

			}
			saleman << name[i] << "\t\t" << age[i] << "\t\t" << ID[i] << endl;

		}

		saleman.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}
};

class peon
{
	string name[10];
	int age[10];
	int ID[10];
public:
	peon()
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
		char ch;
		int i = 0;
		fstream peon;
		peon.open("Peon.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record of the Product.....!!!!!!\n";
			cout << "Enter the Name of Peon: ";
			cin >> name[i];
			peon << name[i] << "\t\t";

			cout << "Enter the Age of Peon: ";
			cin >> age[i];
			peon << age[i] << "\t\t";

			cout << "Enter the ID of Peon: ";
			cin >> ID[i];
			peon << ID[i] << "\t\t";

			i++;
			peon << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		peon.close();
	}

	int display()
	{
		system("cls");
		fstream peon("Peon.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		
		cout << "\t\t****      Record of Peon      ****" << endl;
		cout << "  \t _______________________________" << endl;
		cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
		cout << endl;
		while (!peon.eof())
		{
			peon >> name[i] >> age[i] >> ID[i];
			i++;
			count++;

		}


		count = count - 1;
		for (int i = 0; i < count; i++)
		{

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
			cout << "  \t _______________________________" << endl;

		}


		peon.close();
		system("pause");
		system("cls");
		return count;

	}

	void search()
	{
		system("cls");
		fstream peon("Peon.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		while (!peon.eof())
		{
			peon >> name[i] >> age[i] >> ID[i];
			i++;
			count++;

		}
		peon.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Id" << endl;
		int z;
		string name1;
		int id;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Sales Man :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t\t****      Record of Peon      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;

		case 2:

			cout << "Enter The Id of Sales Man :";
			cin >> id;
			for (int i = 0; i < count; i++)
			{
				if (id == ID[i])
				{
					cout << "\t\t****      Record of Peon     ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
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
		fstream peons;
		peons.open("Peon.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		peons.close();

		remove("Peon.txt");

		peons.open("Peon.txt", ios::out);

		cout << "Enter the Name you want to Delete :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {

				cout << "Record is Deleted...!!!";

				i++;

			}
			peons << name[i] << "\t\t" << age[i] << "\t\t" << ID[i] << endl;

		}

		peons.close();
		display();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}
};

class cashier
{
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
		char ch;
		int i = 0;
		fstream cashier;
		cashier.open("Cashier.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record.....!!!!!!\n";
			cout << "Enter the Name of Cashier: ";
			cin >> name[i];
			cashier << name[i] << "\t\t";

			cout << "Enter the Age of Cashier: ";
			cin >> age[i];
			cashier << age[i] << "\t\t";

			cout << "Enter the Id of Cashier: ";
			cin >> ID[i];
			cashier << ID[i] << "\t\t";

			i++;
			cashier << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		cashier.close();
	}

	int display()
	{
		system("cls");
		fstream cashier("Cashier.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		
		cout << "\t\t****      Record of Cashier      ****" << endl;
		cout << "  \t _______________________________" << endl;
		cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;

		cout << endl;
		while (!cashier.eof())
		{
			cashier >> name[i] >> age[i] >> ID[i];

			i++;
			count++;

		}

		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
			cout << "  \t _______________________________" << endl;
		}

		cashier.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream cashier("Cashier.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		while (!cashier.eof())
		{
			cashier >> name[i] >> age[i] >> ID[i];

			i++;
			count++;

		}
		cashier.close();
		count = count - 1;
	again:
		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Id" << endl;
		int z;
		string name1;
		int id;
		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Cashier :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t\t****      Record of Cashier      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Id of Cashier :";
			cin >> id;
			for (int i = 0; i < count; i++)
			{
				if (id == ID[i])
				{
					cout << "\t\t****      Record of Cashier      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
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
		fstream cashiers;
		cashiers.open("Cashier.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		cashiers.close();

		remove("Cashier.txt");

		cashiers.open("Cashier.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++)
		{
			if (name1 == name[i])
			{
				cout << "Record is Deleted...!!!";
				i++;
			}
			cashiers << name[i] << "\t\t" << age[i] << "\t\t" << ID[i] << endl;

		}

		cashiers.close();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}
};

class guard
{
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
		char ch;
		int i = 0;
		fstream guard;
		guard.open("Security Guard.txt", ios::app | ios::in | ios::out);
		do
		{
			cout << "Enter The Record.....!!!!!!\n";
			cout << "Enter the Name of Security Guard: ";
			cin >> name[i];
			guard << name[i] << "\t\t";

			cout << "Enter the Age of Security Guard: ";
			cin >> age[i];
			guard << age[i] << "\t\t";

			cout << "Enter the ID of Security Guard: ";
			cin >> ID[i];
			guard << ID[i] << "\t\t";

			i++;
			guard << endl;
			cout << "New record is Added...!\n";
			cout << endl;
			cout << "Do You Want to Continue Y/N : ";
			cin >> ch;
		} while (ch == 'y' || ch == 'Y');
		system("cls");
		guard.close();
	}

	int display()
	{
		system("cls");
		fstream guard("Security Guard.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;
		
		cout << "\t\t****      Record of Guard      ****" << endl;
		cout << "  \t _______________________________" << endl;
		cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;

		cout << endl;
		while (!guard.eof())
		{
			guard >> name[i] >> age[i] >> ID[i];
			i++;
			count++;
		}

		count = count - 1;
		for (int i = 0; i < count; i++) {

			cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
			cout << "  \t _______________________________" << endl;
		}

		guard.close();
		system("pause");
		system("cls");
		return count;
	}

	void search()
	{
		system("cls");
		fstream guard("Security Guard.txt", ios::in | ios::out);
		int i = 0;
		int count = 0;


		while (!guard.eof())
		{
			guard >> name[i] >> age[i] >> ID[i];
			i++;
			count++;

		}

		guard.close();
		count = count - 1;

	again:

		cout << endl;
		cout << "\t\tWhat do you want to Searching with " << endl;
		cout << " 1- Name\n 2- Id" << endl;
		int z;
		string name1;
		int id;

		cin >> z;
		switch (z)
		{
		case 1:
			cout << "Enter The Name Of Security guard :";
			cin >> name1;
			for (int i = 0; i < count; i++)
			{
				if (name1 == name[i])
				{
					cout << "\t\t****      Record of Guard      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
					break;
				}
				else if (i == count - 1) {
					cout << "There is not any data related to this input...!\n";
				}
			}
			break;
		case 2:
			cout << "Enter The Id of Security guard :";
			cin >> id;
			for (int i = 0; i < count; i++)
			{
				if (id == ID[i])
				{
					cout << "\t\t****      Record of Guard      ****" << endl;
					cout << "  \t _______________________________" << endl;
					cout << " \tSR.no | Manager Name |  Age  |  Id  " << endl;
					cout << setw(6) << i + 1 << " | " << setw(10) << name[i] << " | " << setw(13) << age[i] << " | " << setw(12) << ID[i] << endl;
					cout << "  \t _______________________________" << endl;
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
		fstream sguard;
		sguard.open("Security Guard.txt", ios::in | ios::out);
		int i = 0;
		count = display();

		sguard.close();

		remove("Security Guard.txt");

		sguard.open("Security Guard.txt", ios::out);

		cout << "Enter the Name you want to Delet :";
		cin >> name1;

		for (int i = 0; i < count; i++) {

			if (name1 == name[i]) {

				cout << "Record is Deleted...!!!";

				i++;

			}
			sguard << name[i] << "\t\t" << age[i] << "\t\t" << ID[i] << endl;

		}

		sguard.close();
		cout << endl;
		system("pause");
		system("cls");
		return count;
	}
};


class billing :public toys, public grossary, public clothes, public medicines, public food, public drinks, public electronics
{
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
	void bill()
	{
		int cho;
	menu:
		cout << "\n\n\n\n\n\n\t\t\t 1: DRINKS" << endl;
		cout << "\t\t\t 2: FOOD ITEMS" << endl;
		cout << "\t\t\t 3:  TOYS" << endl;
		cout << "\t\t\t 4: MAKE UP ITEMS" << endl;
		cout << "\t\t\t 5: ELECTRONICS" << endl;
		cout << " \t\t\t 6: GROSSARY" << endl;
		cout << " \t\t\t 7: MEDICINES" << endl;
		cout << "\n\n\n\t\t\t PRESS 0 TO LOG OUT \n\n\t\t\t";

		cin >> cho;
		switch (cho)
		{

		case 1:
			system("cls");

			obj.display();
			cout << "Enter the name of Drink :";
			cin >> name;
			cout << "Enter the quantity of the Drink :";
			cin >> qua;
			cout << "Enter the price of Drink :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");
			break;

		case 2:
			system("cls");

			obj1.display();
			cout << "Enter the name of Food :";
			cin >> name;
			cout << "Enter the quantity of the Food :";
			cin >> qua;
			cout << "Enter the price of Food :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");
			break;

		case 3:
			system("cls");

			obj2.displaytoy();
			cout << "Enter the name of Toy :";
			cin >> name;
			cout << "Enter the quantity of the Toy :";
			cin >> qua;
			cout << "Enter the price of Toy :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");

			break;

		case 4:
			system("cls");

			obj3.display();
			cout << "Enter the name of Make-Up :";
			cin >> name;
			cout << "Enter the quantity of the Make-Up :";
			cin >> qua;
			cout << "Enter the price of Make-Up :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");
			break;

		case 5:
			system("cls");

			obj4.display();
			cout << "Enter the name of Electronics :";
			cin >> name;
			cout << "Enter the quantity of the Electronics :";
			cin >> qua;
			cout << "Enter the price of Electronics :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");
			break;

		case 6:
			system("cls");

			obj5.display();
			cout << "Enter the name of Grossary :";
			cin >> name;
			cout << "Enter the quantity of the Grossary :";
			cin >> qua;
			cout << "Enter the price of Grossary :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");
			break;
		case 7:
			system("cls");

			obj6.display();
			cout << "Enter the name of Medicine :";
			cin >> name;
			cout << "Enter the quantity of the Medicine :";
			cin >> qua;
			cout << "Enter the price of Medicine :";
			cin >> price;
			total = qua * price;
			cout << "Your Total price is :" << total;
			system("pause");
			break;
		case 0:
			system("pause");
			goto menu;
			break;

		default:
			cout << "Your Choice is invalid...!!!\n";
			system("pause");
			system("cls");
			goto menu;
			break;

		}

	}
};

class products :public toys, public grossary, public clothes, public medicines, public food, public drinks, public electronics
{
	int select;
	drinks obj;
	food obj1;
	electronics obj2;
	food obj3;
	medicines obj4;
	toys obj5;
	grossary obj6;

public:
	void product()
	{
	menu:
		cout << "\t************ Products  ***********" << endl;
		cout << "Select te option in which you want to Display " << endl << endl;
		cout << " 1. Drinks                2. Clothes" << endl << endl;
		cout << " 3. Electronics           4. Food Items" << endl << endl;
		cout << " 5. Medicines             6. Toys" << endl << endl;
		cout << " 7. Grossary              8. new product" << endl << endl;
		cout << "9. exit" << endl << endl;

		cout << "\t       Please select the above one: ";
		cin >> select;
		string pro[10];
		int stack[10];
		char ch;
		int i = 0;
		fstream newproduct;
		switch (select)
		{

			int choose;
		case 1:
			system("cls");
			cout << "\t                 Welcome to Drinks Menu                    " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj.add();
				break;

			case 2:
				system("cls");
				obj.display();
				break;

			case 3:
				system("cls");
				obj.search();
				break;

			case 4:
				system("cls");
				obj.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 2:
			system("cls");
			cout << "\t                 Welcome to Food Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj1.add();
				break;

			case 2:
				system("cls");

				obj1.display();
				break;

			case 3:
				system("cls");

				obj1.search();
				break;

			case 4:
				system("cls");
				obj1.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 3:
			system("cls");
			cout << "\t                 Welcome to Electronics Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj2.add();
				break;

			case 2:
				system("cls");
				obj2.display();
				break;

			case 3:
				system("cls");
				obj2.search();
				break;

			case 4:
				system("cls");
				obj2.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 4:
			system("cls");
			cout << "\t                 Welcome to Food Items Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj3.add();
				break;

			case 2:
				system("cls");
				obj3.display();
				break;

			case 3:
				system("cls");
				obj3.search();
				break;

			case 4:
				system("cls");
				obj3.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 5:
			system("cls");
			cout << "\t                 Welcome to Medicines Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj4.add();
				break;

			case 2:
				system("cls");
				obj4.display();
				break;

			case 3:
				system("cls");
				obj4.search();
				break;

			case 4:
				system("cls");
				obj4.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 6:
			system("cls");
			cout << "\t                 Welcome to Toys Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj5.addtoy();
				break;

			case 2:
				system("cls");
				obj5.displaytoy();
				break;

			case 3:
				system("cls");
				obj5.searchtoy();
				break;

			case 4:
				system("cls");
				obj5.remtoy();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 7:
			system("cls");
			cout << "\t                 Welcome to Grossary Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Product     *******************" << endl;
			cout << "\t***************  2- Display Product   *******************" << endl;
			cout << "\t***************  3- Search Product    *******************" << endl;
			cout << "\t***************  4- Delete Product    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj6.add();
				break;

			case 2:
				system("cls");
				obj6.display();
				break;

			case 3:
				system("cls");
				obj6.search();
				break;

			case 4:
				system("cls");
				obj6.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 8:
			i = 0;
			system("cls");
			
				newproduct.open("new product.txt");
			do
			{
				cout << "\t   " << endl;
				cout << "\t*********************************************************" << endl;
				cout << "\t***************  1- Enter Product     *******************" << endl;
				cin >> pro[i];
				newproduct << pro[i];
				cout << "\t***************  2-Enter stack of product  *******************" << endl;
				cin >> stack[i];
				newproduct << stack[i];
				i++;

				
				cout << "New record is Added...!\n";
				cout << endl;
				cout << "Do You Want to Continue Y/N : ";
				cin >> ch;

			} while (ch == 'y' || ch == 'Y');
			system("cls");
			newproduct.close();
			
			break;
				
		
		case 9:
			system("pause");
			system("cls");
			goto menu;
			break;
		default:
			system("cls");
			system("color c0");
			cout << "INVALID OPTION SELECTED" << endl;
			Sleep(3000);
			system("cls");
			product();
		}
	}
	
};

class staff :public manager, public salesman, public cashier, public peon, public guard
{
	int select;
	manager obj;
	salesman obj1;
	cashier obj2;
	peon obj3;
	guard obj4;
public:
	void employs()
	{
	menu:
		cout << "\t************ Staff Menebers  ***********" << endl;
		cout << "Select te option in which you want to Display " << endl << endl;
		cout << " 1. Manager               2. Cashier" << endl << endl;
		cout << " 3. SalesMan              4. Peon" << endl << endl;
		cout << " 5. Guard                 6. Exit" << endl << endl;
		cout << "\t       Please select the above one: ";
		cin >> select;

		switch (select)
		{
			int choose;
		case 1:
			system("cls");
			cout << "\t                 Welcome to Manager's Menu                    " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter manger data    *******************" << endl;
			cout << "\t***************  2- Display manger data   *******************" << endl;
			cout << "\t***************  3- Search manger data    *******************" << endl;
			cout << "\t***************  4- Delete manger data   *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj.add();
				break;

			case 2:
				system("cls");
				obj.display();
				break;

			case 3:
				system("cls");
				obj.search();
				break;

			case 4:
				system("cls");
				obj.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 2:
			system("cls");
			cout << "\t               Welcome to Sales Man's Menu               " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter sales man data    *******************" << endl;
			cout << "\t***************  2- Display sales man data  *******************" << endl;
			cout << "\t***************  3- Search sales man info   *******************" << endl;
			cout << "\t***************  4- Delete sales man data  *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj1.add();
				break;

			case 2:
				system("cls");

				obj1.display();
				break;

			case 3:
				system("cls");

				obj1.search();
				break;

			case 4:
				system("cls");
				obj1.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 3:
			system("cls");
			cout << "\t                Welcome to Cashier's Menu                " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter cashier data    *******************" << endl;
			cout << "\t***************  2- Display cashier data   *******************" << endl;
			cout << "\t***************  3- Search cashier info   *******************" << endl;
			cout << "\t***************  4- Delete cashier info    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj2.add();
				break;

			case 2:
				system("cls");
				obj2.display();
				break;

			case 3:
				system("cls");
				obj2.search();
				break;

			case 4:
				system("cls");
				obj2.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 4:
			system("cls");
			cout << "\t                 Welcome to Peon's Menu                  " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter Peon information      *******************" << endl;
			cout << "\t***************  2- Display Peon data   *******************" << endl;
			cout << "\t***************  3- Search Peon data   *******************" << endl;
			cout << "\t***************  4- Delete Peon information   *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj3.add();
				break;

			case 2:
				system("cls");
				obj3.display();
				break;

			case 3:
				system("cls");
				obj3.search();
				break;

			case 4:
				system("cls");
				obj3.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		case 5:
			system("cls");
			cout << "\t                 Welcome to Guard's Menu                 " << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t***************  1- Enter guard data     *******************" << endl;
			cout << "\t***************  2- Display guard data   *******************" << endl;
			cout << "\t***************  3- Search guard data   *******************" << endl;
			cout << "\t***************  4- Delete guard data    *******************" << endl;
			cout << "\t***************  5- Exit              *******************" << endl;
			cout << "\t*********************************************************" << endl;
			cout << "\t           Please select the above one: ";
			cin >> choose;
			switch (choose)
			{
			case 1:
				system("cls");
				obj4.add();
				break;

			case 2:
				system("cls");
				obj4.display();
				break;

			case 3:
				system("cls");
				obj4.search();
				break;

			case 4:
				system("cls");
				obj4.rem();
				break;

			case 5:
				system("pause");
				goto menu;

			default:
				cout << "Your Choice is Invalid!!!";
			}

		default:
			cout << "Your Choice is Invalid!!!";

		}
		Sleep(3000);
		system("cls");
		employs();
	}
}; 







class management : public products, public staff
{
	int select;
public:
	void manage()
	{
		system("cls");
		system("color f0");  //white color
		cout << "\n\n\n\n\n\n\t\t\t 1:Product Details " << endl;
		cout << "\t\t\t 2:Staff Details " << endl;
		cout << "\t\t\tSelect an option :";
		cin >> select;
		cout << "\n\n\n\n\t\t\t";
		switch (select)
		{
		case 1:
			system("cls");
			product();
			break;

		case 2:
			system("cls");
			employs();
			break;
		default:
			system("cls");
			system("color c0");
			cout << "Invalid Choice!!";
			Sleep(3000);
			manage();
		}
	}

};


class signin :public menu, public billing, public management
{


	string pin;
	int select = 0;
public:
	
	
	void login()
	{
		starting_page();
		system("pause");
		system("cls");
		cout << "Enter your pin code : ";
		for (int i = 0; i < 4; i++)
		{
			// this take password from user and show in starik at console
			pin += _getch();
			cout << "*";

		}

		if (pin == "1234")
		{
			system("cls");
			system("color f0");  //white color
			cout << "\n\n\n\n\n\n\t\t\t 1:Inventry " << endl;
			cout << "\t\t\t 2:Management " << endl;
			cout << "\t\t\tSelect an option :";
			cin >> select;
			cout << "\n\n\n\n\t\t\t";


			if (select == 1)
			{
				system("cls");
				bill();

			}
			else if (select == 2)
			{
				system("cls");
				manage();
			}
			else
			{
				system("cls");
				system("color c0");
				cout << "Invalid Choice!!";
				Sleep(3000);
				login();
			}

		}
		


		else
		{
			
			system("cls");
			system("color c0");
			cout << "You Entered wrong Pin" << endl;
			Sleep(3000);
			login();

		}
		}
	
};


int main()
{
	signin obj;
	obj.login();
	system("pause");
}
