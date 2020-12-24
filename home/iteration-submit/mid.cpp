#include<iostream>

using namespace std;

int emp[5];
int totaltyres = 10, tlights = 10, tseats = 10, handles = 5, brakeoil = 10, filter = 10;
int token[5];
int custid [5];
int allocemp[5];
int allocempid[5];
int elec = 0, water = 0, waste = 0, gas = 0, cable = 0, other = 0;
int empid[5];
	string empname[5];
	string mobile[5];
	string idcard[5];
	int decidedsalary[5];
	int overtimepay[5];
	int day[5];
	int overtime[5];
	int bonustime[5];
	int totalsalary[5];
	int bonus[5];	
	
	
class admin
{
	public:
	

	
	
	admin()
	{
		empid[0] = 1;
		empname[0] = "Daniyal";
		mobile[0] = "03359010786";
		idcard[0] = "31105";
		empid[1] = 2;	
		empname[1] = "Uzair";
		mobile[1] = "03331231234";
		idcard[1] = "35202";
		empid[2] = 0;
		empid[3] = 0;
		empid[4] = 0;
		for(int i=0;i<5;i++)
		{
			decidedsalary[i] = 0;
			overtimepay[i] = 0;
			day[i] = 0;
			overtime[i] = 0;
			bonustime[i] = 0;
			totalsalary[i] = 0;
			bonus[i] = 0;
			token[i] = 0;
			allocemp[i] = 0;
		}
		//number = 0;
	}
};


class employee : public admin
{
	public:
	employee()
	{
		//cout<<"\n\n You Are in Employ Class\n\n";
	}
	
	void details()
	{
		for(int i=0; i<5; i++)
		{
			if(empid[i] > 0)
			{
			
				cout<<"Emp ID:\t"<<empid[i]<<endl<<endl;
				cout<<"Emp Name:\t"<<empname[i]<<endl<<endl;
				cout<<"Emp Contact:\t"<<mobile[i]<<endl<<endl;
				cout<<"Emp CNIC Card:\t"<<idcard[i]<<endl<<endl;
				cout<<"-----------------------------------------\n\n\n";
			}
			else
			{
				break;
			}
		}
	}
	
	void addnew()
	{
		
			cout<<"\n\nPlease Enter Details of new Employee\n\n";
			for(int i=0; i<5; i++)
			{
				if(empid[i] == 0)
				{
					empid[i] = i+1;
					cout<<"\nEmployee Id is:\t"<<i+1;
					cout<<"\n\nEnter Name:\t";
					cin>>empname[i];
					cout<<"\n\nEnter Number:\t";
					cin>>mobile[i];
					cout<<"\n\nEnter CNIC:\t";
					cin>>idcard[i];
					break;
				}
				
			}
			
	
	}
	
	void attendence()
	{
		int id;
		cout<<"Enter Employee ID\n\n";
		cin>>id;
		for(int i=0;i<5;i++)
		{
			 if(id == empid[i])
			 {
			 	cout<<"\nEnter the decided Salary of employye of this month\n";
				cin>>decidedsalary[i];
				cout<<"\nOvertime pay per hour\n";
				cin>>overtimepay[i];
				cout<<"\nHow many days you have worked in this month excluding allowed Holidays\n";
				cin>>day[i];
				cout<<"Overtime in hours\n";
				cin>>overtime[i];
				break;
			 } 
			 
		}
		
	}
	
	
};


class salary : public employee
{
	int perdaysal;
	public:
	void cal()
	{
		int id;
		cout<<"Enter Employee ID\n\n";
		cin>>id;
		for(int i = 0 ; i < 5 ; i ++)
		{
			if(id == empid[i] && decidedsalary[i] != 0)
			{
				
				perdaysal = decidedsalary[i] / 30;
				totalsalary[i] = day[i] * perdaysal;
				totalsalary[i] = totalsalary[i] + bonus[i] + overtime[i];
					
				cout<<"\n\nDetails Are:\n\n";
				cout<<"Emp ID: \t"<<id;
				cout<<"\n\nName: \t"<<empname[i];
				cout<<"\n\nTotal Salary: \t"<<totalsalary[i];
				cout<<"\n\n____________________________________________\n";
				
				break;
			}	
			
		}
		
				cout<<"\n\nError Occured i.e. Employee or Attendence is missing\n\n";
				
			
	}
	
	
};


class stock : public admin
{
	public:
		
		void checkstock()
		{
			cout<<"\n\nThe Current Stock in inventory is: \n\n\n";
			cout<<"Tyres:\t"<<totaltyres<<endl;
			cout<<"HeadLights:\t"<<tlights<<endl;
			cout<<"Seats:\t"<<tseats<<endl;
			cout<<"Handles:\t"<<handles<<endl;
			cout<<"Brake Oil:\t"<<brakeoil<<endl;
			cout<<"Filter:\t"<<filter<<endl;
			cout<<"___________________________________________"<<endl;
		}
		
		void addstock()
		{
			stock:
			int no,quantity;
			cout<<"Enter the code of product you want to enter\n\n";
			cout<<"1. Tyres\n\n2.Head Lights\n\n3.Seats\n\n4.Handles\n\n5.Brake Oil\n\n6.Filter\n\n7.Go Back\n\n";
			cin>>no;
			switch (no)
			{
				case 1:
					{
						cout<<"Enter quantity of tyres you want to add in stock";
						cin>>quantity;
						
						totaltyres = totaltyres + quantity;		
						break;
					}
				case 2:
					{
						cout<<"Enter quantity of Head Lights you want to add in stock";
						cin>>quantity;
						
						tlights = tlights + quantity;		
						break;
					}
				case 3:
					{
						cout<<"Enter quantity of Seats you want to add in stock";
						cin>>quantity;
						
						tseats = tseats + quantity;	
						break;	
					}
				case 4:
					{
						cout<<"Enter quantity of handles you want to add in stock";
						cin>>quantity;
						
						handles = handles + quantity;		
						break;
					}
				case 5:
					{
						cout<<"Enter quantity of Brake oil you want to add in stock";
						cin>>quantity;
						
						brakeoil = brakeoil + quantity;		
						break;
					}
				case 6:
					{
						cout<<"Enter quantity of Filter you want to add in stock";
						cin>>quantity;
						
						filter = filter + quantity;		
						break;
					}
				case 7:
					{
						break;
					}
				default:
					{
						cout<<"Wrong Entry\n";
						goto stock;
					}
			}
		}
		
};


class customer : public admin
{
	public:
	void newcust()
	{
		for(int i=0 ; i<5 ; i++)
		{
			if(token[i] == 0)
			{
				custid[i] = token[i] + 1; 
				token[i] = token[i] + 1;
				for(int j=0 ; j<5 ; j++)
				{
					if(allocemp[j] == 0)
					{
						allocempid[j] = allocemp[j] + 1;
						cout<<"\n\n\nToken Issued to Customer is: "<<token[i];
						cout<<"\n\n\nMechanic ID allocated to Customer is: "<<allocempid[j];
						cout<<"\n\n";
						break;
					}
				}
				
			}
			break;
		}
		
	}
	
	
	void existingcust()
	{
		int id;
		int no,quantity;
		int tyreprice = 1000;
		int lightpri = 500, seatp = 2000, brakeoilp = 500, filterp = 600, handlep = 2500;
		int total, bill=0;
		cout<<"\n\nEnter the Customer id :\t";
		cin>>id;
		
		for(int i=0 ; i<5 ; i++)
		{
			if(id == custid[i])
			{
				cout<<"\n\nSelect an option\n\n";
				cout<<"\n1. Purchase Stock\n\n2.Done\n\n";
				int opt;
				cin>>opt;
				switch(opt)
				{
					case 1:
						{
							
							stockk:
							
							cout<<"Enter the code of product you want to Purchase\n\n";
							cout<<"1. Tyres\n\n2.Head Lights\n\n3.Seats\n\n4.Handles\n\n5.Brake Oil\n\n6.Filter\n\n7.Go Back\n\n";
							cin>>no;
							switch (no)
							{
								case 1:
									{
										cout<<"Enter quantity of tyres you want to Purchase";
										cin>>quantity;
										if(quantity < totaltyres)
										{
											totaltyres = totaltyres - quantity;	
											total = quantity * tyreprice;
											bill = bill + total; 
										}
										else
										{
											cout<<"\n\nSORRY!!!We are Out Of Stock\n\n";
											break;
										}
											break;
									}
								case 2:
									{
										cout<<"Enter quantity of Head Lights you want to Purchase";
										cin>>quantity;
										if(quantity < tlights)
										{
											tlights = tlights - quantity;	
											total = quantity * lightpri;
											bill = bill + total; 
										}
										else
										{
											cout<<"\n\nSORRY!!!We are Out Of Stock\n\n";
											break;
										}
										//tlights = tlights - quantity;	
										break;	
									}
								case 3:
									{
										cout<<"Enter quantity of Seats you want to Purchase";
										cin>>quantity;
										if(quantity < tseats)
										{
											tseats = tseats - quantity;	
											total = quantity * seatp;
											bill = bill + total; 
										}
										else
										{
											cout<<"\n\nSORRY!!!We are Out Of Stock\n\n";
											break;
										}
										break;
									//	tseats = tseats - quantity;		
									}
								case 4:
									{
										cout<<"Enter quantity of handles you want to Purchase";
										cin>>quantity;
										if(quantity < handles)
										{
											handles = handles - quantity;	
											total = quantity * handlep;
											bill = bill + total; 
										}
										else
										{
											cout<<"\n\nSORRY!!!We are Out Of Stock\n\n";
											break;
										}
										// = handles - quantity;
										break;		
									}
								case 5:
									{
										cout<<"Enter quantity of Brake oil you want to Purchase";
										cin>>quantity;
											if(quantity < brakeoil)
										{
											brakeoil = brakeoil - quantity;	
											total = quantity * brakeoilp;
											bill = bill + total; 
										}
										else
										{
											cout<<"\n\nSORRY!!!We are Out Of Stock\n\n";
											break;
										}
									//	brakeoil = brakeoil - quantity;	
									break;	
									}
								case 6:
									{
										cout<<"Enter quantity of Filter you want to Purchase";
										cin>>quantity;
											if(quantity < filter)
										{
											filter = filter - quantity;	
											total = quantity * filterp;
											bill = bill + total; 
										}
										else
										{
											cout<<"\n\nSORRY!!!We are Out Of Stock\n\n";
											break;
										}
										filter = filter - quantity;		
										break;
									}
								case 7:
									{
										break;
									}
								default:
									{
										cout<<"Wrong Entry\n";
										break;
									}
							}
						}
						
						
						case 2:
							{
								cout<<"-------Your Total Bill is:------------\n\n\n";
								cout<<"Service Charges = \tRs. 2000/-\n\n";
								cout<<"Spare Parts = \tRs. "<<bill<<"/-\n\n";
								cout<<"---------------------------\n\n";
								cout<<"Total Bill = \tRs. "<<bill+2000<<endl<<endl;
								allocemp[i] == 0;
								allocempid[i] == 0;
								break;
							}
						default:
							{
								cout<<"\n\nWrong Entry\n";
								break;
							}
				}
				break;
			}
			
			else
			{
				cout<<"\nCustomer Is not In record\n\n\n";
				break;
			}
		}
	}
	
};

class report : public admin
{
	
public:
	
	void utilitybills()
	{
		cout<<"\n\nEnter Electricty Bill :\t";
		cin>>elec;
		cout<<"\n\nEnter Water Bill :\t";
		cin>>water;
		cout<<"\n\nEnter Garbage Bill :\t";
		cin>>waste;
		cout<<"\n\nEnter Gas Bill :\t";
		cin>>gas;
		cout<<"\n\nEnter Cable Bill :\t";
		cin>>cable;
		cout<<"\n\nEnter Other Bill :\t";
		cin>>other;
	}
	
	
	void sparepartsrep()
	{
		cout<<"\n\n------------REPORT OF SPARE PARTS------------\n\n\n";
		cout<<"\n\nAvaiable Stock is:\n\n";
		cout<<"\n\nTyres :\t "<<totaltyres;
		cout<<"\n\nSeats :\t "<<tseats;
		cout<<"\n\nHead Lights :\t "<<tlights;
		cout<<"\n\nHandles :\t "<<handles;
		cout<<"\n\nBrake Oil :\t "<<brakeoil;
		cout<<"\n\nFilter :\t "<<filter;
	}
	
	void utilityrep()
	{
		cout<<"\n\n------------REPORT OF UTILITY BILLS------------\n\n\n";
		cout<<"\n\nTotal Bills are:\n\n";
		cout<<"\n\nElectricity Bill :\t "<<elec;
		cout<<"\n\nWater Bill :\t "<<water;
		cout<<"\n\nGarbage Bill :\t "<<waste;
		cout<<"\n\nGas Bill :\t "<<gas;
		cout<<"\n\nCable Bill :\t "<<cable;
		cout<<"\n\nOther  :\t "<<other;
	}
	
	void salariesrep()
	{
		for(int i=0;i<5;i++)
		{
				cout<<"\nEmp ID:\t "<<empid[i];
				cout<<"\nName Emp:\t "<<empname[i];
					 
			 	cout<<"\nDecided Salary:\t "<<decidedsalary[i];
				
				cout<<"\nTotal Payment :\t "<<totalsalary[i];
			
			 	cout<<"__________________________________________________";
		}
	}
};


int main()
{
	admin a;
	employee emp;
	stock sto;
	string pass;
	customer cust;
	report rep;
		salary sal;
	cout<<"Only Admin is Authorized Person\n\n";
	admin:
	cout<<"Enter the password\n";
	
	cin>>pass;
	if(pass == "admin")
	{
		system("cls");
		int selection;
		main:
		cout<<"Choose the Operation\n\n\n";
		cout<<"\n1.Track of Employees\n2.Employee Attendence\n3.Employee Salaries \n4.Maintain Stock\n5.Customer\n"<<endl;
		cout<<"6.Maintain Bills\n7.Check Reports\n8.Exit\n\n\n";
	
		cin>>selection;
		
		
		switch (selection)
		{
			case 1:
				{
					cout<<"\n\nSelect your option\n\n";
					int op;
					cout<<"1. Details\n\n2. Add New\n\n";
					cin>>op;
					switch (op)
					{
						case 1:
							{
								emp.details();
								system("pause");
								system("cls");
								goto main;
							}
						case 2:
							{
								emp.addnew();
								system("pause");
								system("cls");
								goto main;
							}
						default:
							{
								cout<<"Wrong Entry";
							}
					}
				}
			
			case 2:
				{
					emp.attendence();
					system("pause");
					system("cls");
					goto main;
				}
			case 3:
				{
				
					sal.cal();
					system("pause");
					system("cls");
					goto main;	
				}
			case 4:
				{
					cout<<"\n\nChoose an option\n\n";
					int opt;
					cout<<"1.Check Stock\n\n2.Add New Stock\n\n";
					cin>>opt;
					switch(opt)
					{
						case 1:
							{
								sto.checkstock();
								system("pause");
								system("cls");
								goto main;
							}
						case 2:
							{
								sto.addstock();
								system("pause");
								system("cls");
								goto main;
							}
						default:
							{
								cout<<"\n\n\nWrong Entry\n\n";
								system("pause");
								system("cls");
								goto main;
							}
					}
				}
				
				case 5:
					{	
						cout<<"\n\nChoose an option\n\n";
						int opt;
						cout<<"1.New Customer\n\n2.Existing Customer\n\n";
						cin>>opt;
							switch(opt)
							{
								case 1:
									{
										cust.newcust();
										system("pause");
										system("cls");
										goto main;
									}
								case 2:
									{
										cust.existingcust();
										system("pause");
										system("cls");
										goto main;
									}
								default:
									{
										cout<<"\n\n\nWrong Entry\n\n";
										system("pause");
										system("cls");
										goto main;
									}	
							}
					}
					
				case 6:
					{
						rep.utilitybills();
						system("pause");
						system("cls");
						goto main;
					}
					
				case 7:
					{
						cout<<"\n\nEnter Report Number\n\n";
						cout<<"\n1. Utility Reports\n 2. Salaries Reports\n 3. Spare Parts Report\n\n";
						int op;
						cin>>op;
						
						switch (op)
						{
							case 1:
								{
									rep.utilityrep();
										system("pause");
										system("cls");
										goto main;
								}
							case 2:
								{
									rep.salariesrep();
									system("pause");
										system("cls");
										goto main;	
								}
							case 3:
								{
									rep.sparepartsrep();
										system("pause");
										system("cls");
										goto main;
								}
							default:
								{
									cout<<"\n\nWrong Entry";
										system("pause");
										system("cls");
										goto main;
								}
						}
					}
					
					case 8:
						{
							break;
						}
					
					default:
						{
							goto main;
						}
		
		
		
		}
	}
	else
	{
		cout<<"Sorry You are not Authorized";
		cout<<"\n\nTry Again";
		goto admin;
	}


}
