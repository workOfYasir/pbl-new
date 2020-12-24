
#include <iostream>
#include <string>
using namespace std;


//Q8
class Car
{
private:
	string make, car_model, reg_no, color;
	int year;
public:
	Car()
	{
		make = car_model = reg_no = color = " ";
		year = 0;
	}
	void init()
	{
		cout << "\nEnter Make: "; cin >> make;

		cout << "\nEnter Car Model: "; cin >> car_model;

		cout << "\nEnter Color: "; cin >> color;

		cout << "\nEnter Registration no: "; cin >> reg_no;

		cout << "\nEnter Year: "; cin >> year;
	}
	string getMake()
	{
		return make;
	}
	string getCarModel()
	{
		return car_model;
	}
	string getReg()
	{
		return reg_no;
	}
	string getColor()
	{
		return color;
	}
	int getYear()
	{
		return year;
	}
	void setMake(string m)
	{
		make = m;
	}
	void setCarModel(string m)
	{
		car_model = m;
	}
	void setReg(string m)
	{
		reg_no = m;
	}
	void setColor(string m)
	{
		color = m;
	}
	void setYear(int i)
	{
		year = i;
	}


	~Car()
	{

	}
};
class Garage
{
private:
	string name;
	int index, capacity;
	Car *cars = new Car[capacity];
public:
	Garage()
	{
		name = "";
		index = 0; capacity = 10;
		cars = new Car[capacity];
	}
	bool IsEmpty()
	{
		if (index != capacity)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	bool IsFull()
	{
		if (index == capacity)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	void Push(Car &c)
	{
		bool x;
		x = this->IsEmpty();
		if (x == 1)
		{
			cout << "\n\nCar can be parked\n";
			cars[index].setCarModel(c.getCarModel());
			cars[index].setColor(c.getColor());
			cars[index].setMake(c.getMake());
			cars[index].setReg(c.getReg());
			cars[index].setYear(c.getYear());
			index++;
		}
		else
		{
			cout << "\n Garage is Full: \n";
		}

	}
	bool Find(string &reg)
	{
		for (int i = 0; i < capacity; i++)
		{
			if (cars[i].getReg() == reg)
			{
				cout << "Found\n";
				return true;
				break;
			}
		}
	}
	bool Remove(string &reg)
	{
		for (int i = 0; i < capacity; i++)
		{
			if (cars[i].getReg() == reg)
			{
				int x = i;
				for (int j = x; j < capacity - 1; j++)
				{
					cars[j] = cars[j + 1];
				}
			}
		}
		index--;
		return true;
	}
	void display()
	{
		for (int i = 0; i < index; i++)
		{
			cout << cars[i].getReg() << " " << cars[i].getColor() << " " << cars[i].getCarModel() << " " << cars[i].getMake() << " " << cars[i].getYear() << endl;
		}
	}
};



int main()
{
	Garage g;
	int q;	q = 0;
	while (q != 6)
	{
		cout << "Input option\n" << "1 - Add car in garage\n" << "2 - remove car from garage\n" << "3 - Display parked cars\n" << "4 - find car\n" << "5 - Check if garage is full\n" << "6 - Exit" << endl;
		cin >> q;

		switch (q)
		{
		case 1:
		{
			Car c;
			c.init();
			g.Push(c);
			break;
		}
		case 2:
		{
			cout << "Input reg_no of car to be removed\n";
			string c;
			cin >> c;
			g.Remove(c);
			break;
		}
		case 3:
		{
			g.display();
			break;
		}
		case 4:
		{
			cout << "Input reg_no of car to be found\n";
			string c;
			cin >> c;
			g.Find(c);
			system("pause");
			break;
		}
		case 5:
		{
			if (g.IsFull())
			{
				cout << "Garage is full\n";
			}
			else
			{
				cout << "Garage is not full\n";
			}
			system("pause");
			break;
		}
		case 6:
		{
			break;
		}
		default:
			break;
		}

	}


}
