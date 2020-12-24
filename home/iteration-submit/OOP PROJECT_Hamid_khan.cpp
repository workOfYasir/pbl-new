#include<iostream>
#include<string>
#include<fstream>
#include<ctime>
using namespace std;
#include<windows.h>

int about;   //globally declared variable
class info{
	private:  
		string in; // datamember
		int size;
	public:
	void info_cus() // function
	{
		string c="\t\t\t\t\t\t\t\t  For our mall security kindly guide us How many member you are?";
		for(int i=0; c[i]!='\0';i++)
		{
			cout << c[i];
			Sleep(100);
		}
		cout<<endl;		
		cin>>size;                                //dynamic array
		string d="\t\t\t\t\t\t\t\t\t\t\tMale or female";		
		for(int i=0; d[i]!='\0';i++)
		{
			cout << d[i];
			Sleep(20);
		}
		cout<<endl;
		for(int i=0;i<size;i++)
		{		
			cin>>in;
		}
	}		
};
class mall{/////////////////////////////////////////////////////////////////////////////////////////////////////CLASS MALL START
	private:
		char ch_mall;
	protected:
		time_t now;                   //time variable
		char *con;                    //time pointer
	public:
		void parking()
		{
			string e="\t\t\t\t\t\t\t\t***Do you want to enter in Mall (E) or just to pick someone(P)?***";
		for(int i=0; e[i]!='\0';i++)
		{
			cout << e[i];
			Sleep(1);
		}
		cout<<endl;
			cin>>ch_mall;
			switch (ch_mall)
			{
			case 'e' : case 'E':
				{
					about++;
					now=time(0);
					con=ctime(&now);
					ofstream parkingreceipt;
					parkingreceipt.open("parking.txt");
					parkingreceipt<<"    -------------------------------------------------------"<<endl;
					parkingreceipt<<"    |               Welcome to Emporium Mall              |"<<endl;
					parkingreceipt<<"    |-----------------------------------------------------|"<<endl;
					parkingreceipt<<"    |                 Parking Fee = Rs.30                 |"<<endl;
					parkingreceipt<<"    |-----------------------------------------------------|"<<endl;
					parkingreceipt<<"    |                *Terms And Conditions*               |"<<endl;
					parkingreceipt<<"    |-----------------------------------------------------|"<<endl;
					parkingreceipt<<"    |               *Lock your car perfectly*             |"<<endl;
					parkingreceipt<<"    |             *Park on Parking space only*            |"<<endl;										
					parkingreceipt<<"    -------------------------------------------------------"<<endl;
					parkingreceipt<<"                   |    Enjoy your Stay    |"<<endl;															
					parkingreceipt<<"                   -------------------------                    "<<endl;
					parkingreceipt<<"         *Time        : "<<con;					
					parkingreceipt.close();
					system("parking.txt");
					break;
				}
			case 'p': case 'P':
				{
					string b="----------Thanks For Coming----------";
					cout<<"\t\t";
					for(int i=0; b[i]!='\0';i++)
					{
						cout << b[i];
						Sleep(100);
					}
					break;
				}
			}
		}
};/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CLASS MALL END




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



class breakout:public mall{
	private:
		char ch_breakout;
		int items;
		int a;
		static int chart;
		static int bill;
		int count;
	public:
		void break_items()
		{
			jump1:
			cout<<"\t\t|------------------------------------------------------------------|"<<endl;
			cout<<"\t\t|       We have MENS , WOMENS , KIDS collection(press m,w,k)       |"<<endl;
			cout<<"\t\t|------------------------------------------------------------------|"<<endl;
			cin>>ch_breakout;
			switch(ch_breakout)
			{
				case 'm':
				{
					cout<<"\t\t\t _____________________"<<endl;
					cout<<"\t\t\t|                     |"<<endl;
					cout<<"\t\t\t| 1.Casual shirts=550 |"<<endl;
					cout<<"\t\t\t| 2.Brezzers=7000     |"<<endl;
					cout<<"\t\t\t| 3.Accessiories      |"<<endl;
					cout<<"\t\t\t|_____________________|"<<endl;
					cout<<"\t\t\t|                     |"<<endl;
					cout<<"\t\t\t|   Press 1,2,3       |"<<endl;
					cout<<"\t\t\t|_____________________|"<<endl;

					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne shirt is added in cart prize = Rs.550";
							chart++;
							bill=bill+550;
							goto back;							
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne brezzer is added in cart prize = Rs.7000";
							chart++;
							bill=bill+7000;
							goto back;						
						}
					else if(items==3)
						{
							cout<<"\t\t\t ______________________"<<endl;
							cout<<"\t\t\t|                      |"<<endl;
							cout<<"\t\t\t| 1.Belts=400          |"<<endl;
							cout<<"\t\t\t| 2.Baraclets=500      |"<<endl;
							cout<<"\t\t\t| 3.Bags=4000          |"<<endl;
							cout<<"\t\t\t|______________________|"<<endl;
							cout<<"\t\t\t|                      |"<<endl;
							cout<<"\t\t\t|   Press 1,2,3        |"<<endl;
							cout<<"\t\t\t|______________________|"<<endl;
							cin>>a;
							if(a==1)
								{
									cout<<"\t\t\tOne belt is added in cart prize = Rs.400";
									chart++;
									bill=bill+400;
									goto back;
								}
							else if(a==2)
								{
									cout<<"\t\t\tOne baraclet is added in cart prize = Rs.500";
									chart++;
									bill=bill+500;
									goto back;
								}
							else if(a==3)
								{
									cout<<"\t\t\tOne bag is added in cart prize = Rs.4000";
									chart++;
									bill=bill+4000;
									goto back;
								}	
							else if(a>3)
							{
								cout<<"\t\t\tInvalid Input"<<endl;
								goto jump1;
							}
						}
					else if(items>3)
						{
							cout<<"\t\t\tInvalid Input"<<endl;
							goto jump1;
						}		
				}
				case 'w':
				{
					cout<<"\t\t\t _______________________"<<endl;
					cout<<"\t\t\t|                      |"<<endl;
					cout<<"\t\t\t| 1.Tops =2600         |"<<endl;
					cout<<"\t\t\t| 2.Bottom=3000        |"<<endl;
					cout<<"\t\t\t| 3.Jewelry=5000       |"<<endl;
					cout<<"\t\t\t| 4.Bags=4000          |"<<endl;
					cout<<"\t\t\t|______________________|"<<endl;
					cout<<"\t\t\t|                      |"<<endl;
					cout<<"\t\t\t|  Press 1,2,3,4       |"<<endl;
					cout<<"\t\t\t|______________________|"<<endl;
					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne top is added in cart prize = Rs.2600";
							chart++;
							bill=bill+2600;	
							goto back;						
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne bottom is added in cart prize = Rs.3000";
							chart++;
							bill=bill+3000;
							goto back;							
						}
					else if(items==3)
						{
							cout<<"\t\t\tOne jewelry item is added in cart prize = Rs.5000";
							chart++;
							bill=bill+5000;
							goto back;					
						}
					else if(items==4)
						{
							cout<<"\t\t\tOne bag is added in cart prize = Rs.4000";
							chart++;
							bill=bill+4000;
							goto back;							
						}	
					else if(items>4)
						{
							cout<<"\t\t\tInvalid input"<<endl;
							goto jump1;
						}										
				}
				case 'k':
				{
					cout<<"\t\t\t _______________________"<<endl;
					cout<<"\t\t\t|                      |"<<endl;
					cout<<"\t\t\t| 1.Jumpers=1500       |"<<endl;
					cout<<"\t\t\t| 2.Shoes=1000         |"<<endl;
					cout<<"\t\t\t| 3.T-Shirt=500        |"<<endl;
					cout<<"\t\t\t|______________________|"<<endl;
					cout<<"\t\t\t|                      |"<<endl;
					cout<<"\t\t\t|   Press 1,2,3        |"<<endl;
					cout<<"\t\t\t|______________________|"<<endl;
					
					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne jumper is added in cart prize = Rs.1500";
							chart++;
							bill=bill+1500;
							goto back;							
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne shoe is added in cart prize = Rs.1000";
							chart++;
							bill=bill+1000;
							goto back;							
						}
					else if(items==3)
						{
							cout<<"\t\t\tOne shirt is added in cart prize = Rs.500";
							chart++;
							bill=bill+500;
							goto back;							
						}
					else if(items>3)
						{
							cout<<"\t\t\tInvalid Input"<<endl;
							goto jump1;						
						}										
				}
				default:
						cout<<"\t\t\tInvalid Input"<<endl;
						goto jump1;					
			}
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher shopping 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream breakoutreceipt;
					breakoutreceipt.open("breakout.txt");
					breakoutreceipt<<"---------------------------------"<<endl;
					breakoutreceipt<<"|            Breakout           |"<<endl;
					breakoutreceipt<<"---------------------------------"<<endl;
					breakoutreceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					breakoutreceipt<<"|                               |"<<endl;
					breakoutreceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					breakoutreceipt<<"---------------------------------"<<endl;					
					breakoutreceipt<<"|        Thanks For Coming      |"<<endl;										
					breakoutreceipt<<"|    *************************  |"<<endl;
					breakoutreceipt<<"|        Visit Us Again         |"<<endl;	
					breakoutreceipt<<"---------------------------------"<<endl;						
					breakoutreceipt<<" Time:"<<con<<endl;																		
					breakoutreceipt.close();
					system("breakout.txt");				
				}
			else if(count>2)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto back;				
				}
		}
};
int breakout::chart=0;          //static variable
int breakout::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class cambridge:public breakout{
	private:
		char ch_cambridge;
		int items;
		static int chart;
		static int bill;
		int count;
	public:
		void cam_items()
		{
			jump1:
			cout<<"\t\t|------------------------------------------------------------------|"<<endl;
			cout<<"\t\t|       We have MENS , WOMENS , KIDS collection(press m,w,k)       |"<<endl;
			cout<<"\t\t|------------------------------------------------------------------|"<<endl;
			cin>>ch_cambridge;
			switch(ch_cambridge)
			{
				case 'm':
				{
					cout<<"\t\t\t _________________"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t| 1.Warmer Top=1500    |"<<endl;
					cout<<"\t\t\t| 2.Warmer Bottom=1700 |"<<endl;
					cout<<"\t\t\t| 3.T-Shirt=2000      |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t|   Press 1,2,3   |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;

					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne Warmer top is added in cart prize = Rs.550";
							chart++;
							bill=bill+1500;
							goto back;							
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne Warmer bottom is added in cart prize = Rs.1700";
							chart++;
							bill=bill+1700;
							goto back;						
						}
					else if(items==3)
						{
							cout<<"\t\t\tOne shirt is added in cart prize = Rs.2000";
							chart++;
							bill=bill+2000;
							goto back;
						}
					else if(items>4)
						{
							cout<<"\t\t\tInvalid Input"<<endl;
							goto jump1;
						}
				}
				case 'w':
				{
					cout<<"\t\t\t _________________"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t| 1.Top=1500          |"<<endl;
					cout<<"\t\t\t| 2.Bottom=1000        |"<<endl;
					cout<<"\t\t\t| 3.Kurta=1500         |"<<endl;
					cout<<"\t\t\t| 4.Bags=5000          |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t|  Press 1,2,3,4  |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne top is added in cart prize = Rs.1500";
							chart++;
							bill=bill+1500;	
							goto back;						
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne bottom is added in cart prize = Rs.1000";
							chart++;
							bill=bill+1000;
							goto back;							
						}
					else if(items==3)
						{
							cout<<"\t\t\tOne kurta item is added in cart prize = Rs.1500";
							chart++;
							bill=bill+1500;
							goto back;					
						}
					else if(items==4)
						{
							cout<<"\t\t\tOne bag is added in cart prize = Rs.5000";
							chart++;
							bill=bill+5000;
							goto back;							
						}	
					else if(items>4)
					{
						cout<<"\t\t\tInvalid Input"<<endl;
						goto jump1;
					}										
				}
				default:
					cout<<"Invalid Input"<<endl;
					goto jump1;
			}
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher shopping 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream camreceipt;
					camreceipt.open("cambridge.txt");
					
					camreceipt<<"---------------------------------"<<endl;
					camreceipt<<"|            Cambridge          |"<<endl;
					camreceipt<<"---------------------------------"<<endl;
					camreceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					camreceipt<<"|                               |"<<endl;
					camreceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					camreceipt<<"---------------------------------"<<endl;					
					camreceipt<<"|        Thanks For Coming      |"<<endl;										
					camreceipt<<"|    *************************  |"<<endl;
					camreceipt<<"|          Visit Us Again       |"<<endl;	
					camreceipt<<"---------------------------------"<<endl;						
					camreceipt<<" Time:"<<con<<endl;																		
					camreceipt.close();
																									
					system("cambridge.txt");				
				}
			else if(count>2)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto back;
				}		
		}
};
int cambridge::chart=0;				//static variable
int cambridge::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class bonanza:public cambridge{
	private:
		char ch_bon;
		int items;
		static int chart;
		static int bill;
		int count;
	public:
		void bon_items()
		{
			jump1:
			cout<<"\t\t|------------------------------------------------------------------|"<<endl;
			cout<<"\t\t|       We have MENS , WOMENS , KIDS collection(press m,w,k)       |"<<endl;
			cout<<"\t\t|------------------------------------------------------------------|"<<endl;
			cin>>ch_bon;
			switch(ch_bon)
			{
				case 'm':
				{
					cout<<"\t\t\t _________________"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t| 1.Stiched Suit=5000  |"<<endl;
					cout<<"\t\t\t| 2.Unstichd Suit=3000 |"<<endl;
					cout<<"\t\t\t| 3.Sweater=4000       |"<<endl;
					cout<<"\t\t\t| 4.T-Shirt=2000      |"<<endl;
					cout<<"\t\t\t| 5.Dress Pents=2500   |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t| Press 1,2,3,4,5 |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne stiched suit is added in cart prize = Rs.5000";
							chart++;
							bill=bill+5000;
							goto back;							
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne unstiched suit is added in cart prize = Rs.3000";
							chart++;
							bill=bill+3000;
							goto back;						
						}
					else if(items==3)
						{
							cout<<"\t\t\tOne sweater is added in cart prize = Rs.4000";
							chart++;
							bill=bill+4000;
							goto back;
						}
					else if(items==4)
						{
							cout<<"\t\t\tOne shirt is added in cart prize = Rs.2000";
							chart++;
							bill=bill+2000;
							goto back;
						}
					else if(items==5)
						{
							cout<<"\t\t\tOne Dress Pent is added in cart prize = Rs.2500";
							chart++;
							bill=bill+2500;
							goto back;
						}	
					else if(items>5)
						{
							cout<<"\t\t\tInvalid Input"<<endl;
							goto jump1;
						}
				}
				case 'w':
				{
					cout<<"\t\t\t _________________"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t| 1.Stiched Suit =7000 |"<<endl;
					cout<<"\t\t\t| 2.Unstichd Suit=4000 |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t|    Press 1,2    |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;

					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne stiched suit is added in cart prize = Rs.7000";
							chart++;
							bill=bill+7000;	
							goto back;						
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne Unstiched suit is added in cart prize = Rs.4000";
							chart++;
							bill=bill+4000;
							goto back;							
						}	
					else if(items>2)
						{
							cout<<"Invalid Input"<<endl;
							goto jump1;
						}							
				}
				case 'k':
				{
					cout<<"\t\t\t _________________"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t| 1.Shalwar Kamiz=3000 |"<<endl;
					cout<<"\t\t\t| 2.Unstiched Suit=2000 |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;
					cout<<"\t\t\t|                 |"<<endl;
					cout<<"\t\t\t|    Press 1,2    |"<<endl;
					cout<<"\t\t\t|_________________|"<<endl;

					cin>>items;
					if(items==1)
						{
							cout<<"\t\t\tOne shalwar kameez is added in cart prize = Rs.3000";
							chart++;
							bill=bill+3000;
							goto back;							
						}
					else if(items==2)
						{
							cout<<"\t\t\tOne peshawari chapal is added in cart prize = Rs.2000";
							chart++;
							bill=bill+2000;
							goto back;							
						}			
					else if(items>2)
						{
							cout<<"\t\t\tInvalid Input"<<endl;
							goto jump1;
						}		
				}
				default:
					cout<<"\t\t\tInvalid Input"<<endl;
					goto jump1;	
			}
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher shopping 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream bonanzareceipt;
					bonanzareceipt.open("bonanza.txt");
					bonanzareceipt<<"---------------------------------"<<endl;
					bonanzareceipt<<"|            Bonanza            |"<<endl;
					bonanzareceipt<<"---------------------------------"<<endl;
					bonanzareceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					bonanzareceipt<<"|                               |"<<endl;
					bonanzareceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					bonanzareceipt<<"---------------------------------"<<endl;					
					bonanzareceipt<<"|        Thanks For Coming      |"<<endl;										
					bonanzareceipt<<"|    *************************  |"<<endl;
					bonanzareceipt<<"|          Visit Us Again       |"<<endl;	
					bonanzareceipt<<"---------------------------------"<<endl;						
					bonanzareceipt<<" Time:"<<con<<endl;
					bonanzareceipt.close();
					system("bonanza.txt");				
				}
			else if(count>2)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto back;
				}
		}
};
int bonanza::chart=0;				//static variable
int bonanza::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class skincare:public bonanza{
	private:
		int items;
		static int chart;
		static int bill;
		int count;
	public:
		void skin_items()
		{
			jump1:
			cout<<"\t\t\t-------------------------"<<endl;				
			cout<<"\t\t\t|      1.Fash wash=250      |"<<endl;
			cout<<"\t\t\t|      2.Garnier Mask=285   |"<<endl;
			cout<<"\t\t\t|      3.Skin polish=1000    |"<<endl;
			cout<<"\t\t\t|      4.Shampoo=290       |"<<endl;
			cout<<"\t\t\t-------------------------"<<endl;				
			cout<<"\t\t\t      Enter 1,2,3,4      "<<endl;
			cin>>items;
			if(items==1)
				{
					cout<<"\t\t\tOne Facewash is added in cart prize = Rs.250";
					chart++;
					bill=bill+250;	
					goto back;						
				}
			else if(items==2)
				{
					cout<<"\t\t\tOne Garnier Mask is added in cart prize = Rs.285";
					chart++;
					bill=bill+285;
					goto back;							
				}
			else if(items==3)
				{
					cout<<"\t\t\tOne Skin polish item is added in cart prize = Rs.1000";
					chart++;
					bill=bill+1000;
					goto back;					
				}
			else if(items==4)
				{
					cout<<"\t\t\tOne Shampoo is added in cart prize = Rs.290";
					chart++;
					bill=bill+290;
					goto back;							
				}
			else if(items>4)
			{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto jump1;				
			}											
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher shopping 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream skinreceipt;
					skinreceipt.open("skin.txt");
					skinreceipt<<"---------------------------------"<<endl;
					skinreceipt<<"|            SkinCare           |"<<endl;
					skinreceipt<<"---------------------------------"<<endl;
					skinreceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					skinreceipt<<"|                               |"<<endl;
					skinreceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					skinreceipt<<"---------------------------------"<<endl;					
					skinreceipt<<"|        Thanks For Coming      |"<<endl;										
					skinreceipt<<"|    *************************  |"<<endl;
					skinreceipt<<"|         Visit Us Again        |"<<endl;	
					skinreceipt<<"---------------------------------"<<endl;						
					skinreceipt<<" Time:"<<con<<endl;
					skinreceipt.close();
					system("skin.txt");				
				}
			else
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto back;				
				}	
		}
};	
int skincare::chart=0;
int skincare::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class toy:public skincare{
	private:
		int items;
		static int chart;
		static int bill;
		int count;
	public:
		void toy_items()
		{
			jump1:
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t| 1.Basketballs=500    |"<<endl;
			cout<<"\t\t\t| 2.Football=1000      |"<<endl;
			cout<<"\t\t\t| 3.Badminton=1500     |"<<endl;
			cout<<"\t\t\t| 4.Hockey=5000        |"<<endl;
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t  Enter 1,2,3,4     "<<endl;
			cin>>items;
			if(items==1)
				{
					cout<<"\t\t\tOne Basketball is added in cart prize = Rs.500";
					chart++;
					bill=bill+500;	
					goto back;						
				}
			else if(items==2)
				{
					cout<<"\t\t\tOne Football is added in cart prize = Rs.1000";
					chart++;
					bill=bill+1000;
					goto back;							
				}
			else if(items==3)
				{
					cout<<"\t\t\tOne Badminton item is added in cart prize = Rs.1500";
					chart++;
					bill=bill+1500;
					goto back;					
				}
			else if(items==4)
				{
					cout<<"\t\t\tOne Hockey is added in cart prize = Rs.5000";
					chart++;
					bill=bill+500;
					goto back;							
				}
			else if(items>4)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto jump1;					
				}											
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher shopping 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream toyreceipt;
					toyreceipt.open("toy.txt");
					toyreceipt<<"---------------------------------"<<endl;
					toyreceipt<<"|            Toy-Shop           |"<<endl;
					toyreceipt<<"---------------------------------"<<endl;
					toyreceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					toyreceipt<<"|                               |"<<endl;
					toyreceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					toyreceipt<<"---------------------------------"<<endl;					
					toyreceipt<<"|        Thanks For Coming      |"<<endl;										
					toyreceipt<<"|    *************************  |"<<endl;
					toyreceipt<<"|         Visit Us Again        |"<<endl;	
					toyreceipt<<"---------------------------------"<<endl;						
					toyreceipt<<" Time:"<<con<<endl;
					toyreceipt.close();
					system("toy.txt");				
				}
			else if(count>2)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto back;
				}			
		}
};	
int toy::chart=0;
int toy::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class burgerking:public toy{
	private:
		int items;
		static int chart;
		static int bill;
		int count;
	public:
		void burger_items()
		{
			jump1:
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t| 1.Fatty Burger=500  |"<<endl;
			cout<<"\t\t\t| 2.Double Cheese=700  |"<<endl;
			cout<<"\t\t\t| 3.Zinger & Fries=800 |"<<endl;
			cout<<"\t\t\t| 4.Cold Drink=100     |"<<endl;
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t  Enter 1,2,3,4     "<<endl;
			cin>>items;
			if(items==1)
				{
					cout<<"\t\t\tOne Fatty burger is added in cart prize = Rs.500";
					chart++;
					bill=bill+500;	
					goto back;						
				}
			else if(items==2)
				{
					cout<<"\t\t\tOne Double cheese is added in cart prize = Rs.700";
					chart++;
					bill=bill+700;
					goto back;							
				}
			else if(items==3)
				{
					cout<<"\t\t\tOne Zinger with fries item is added in cart prize = Rs.800";
					chart++;
					bill=bill+800;
					goto back;					
				}
			else if(items==4)
				{
					cout<<"\t\t\tOne Cold drink is added in cart prize = Rs.100";
					chart++;
					bill=bill+100;
					goto back;							
				}
			else if(items>4)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto jump1;				
				}											
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher food order and 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream burgerkingreceipt;
					burgerkingreceipt.open("burgerking.txt");
					burgerkingreceipt<<"---------------------------------"<<endl;
					burgerkingreceipt<<"|            Burger-King        |"<<endl;
					burgerkingreceipt<<"---------------------------------"<<endl;
					burgerkingreceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					burgerkingreceipt<<"|                               |"<<endl;
					burgerkingreceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					burgerkingreceipt<<"---------------------------------"<<endl;					
					burgerkingreceipt<<"|        Thanks For Coming      |"<<endl;										
					burgerkingreceipt<<"|    *************************  |"<<endl;
					burgerkingreceipt<<"|          Visit Us Again       |"<<endl;	
					burgerkingreceipt<<"---------------------------------"<<endl;						
					burgerkingreceipt<<" Time:"<<con<<endl;
					burgerkingreceipt.close();
					system("burgerking.txt");				
				}
			else if(count>2)
				{
					cout<<"\t\t\tInvalid Input"<<endl;
					goto back;
				}			
		}
};	
int burgerking::chart=0;
int burgerking::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class manhaiten:public burgerking{
	private:
		int items;
		static int chart;
		static int bill;
		int count;
	public:
		void manhaiten_items()
		{
			jump1:
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t| 1.Single Slice=500   |"<<endl;
			cout<<"\t\t\t| 2.Large Pizza=900    |"<<endl;
			cout<<"\t\t\t| 3.Family Pizza=1000   |"<<endl;
			cout<<"\t\t\t| 4.Cold Drink=100     |"<<endl;
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t  Enter 1,2,3,4     "<<endl;
			cin>>items;
			if(items==1)
				{
					cout<<"\t\t\tOne single slice pizza is added in cart prize = Rs.500";
					chart++;
					bill=bill+500;	
					goto back;						
				}
			else if(items==2)
				{
					cout<<"\t\t\tOne Large Pizza is added in cart prize = Rs.900";
					chart++;
					bill=bill+900;
					goto back;							
				}
			else if(items==3)
				{
					cout<<"\t\t\tOne Family pizza item is added in cart prize = Rs.1000";
					chart++;
					bill=bill+1000;
					goto back;					
				}
			else if(items==4)
				{
					cout<<"\t\t\tOne Cold drink is added in cart prize = Rs.100";
					chart++;
					bill=bill+100;
					goto back;							
				}
			else if(items>4)
			{
				cout<<"Invalid Input"<<endl;
				goto jump1;
			}									
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher order food and 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream manhaitenreceipt;
					manhaitenreceipt.open("manhaiten.txt");
					manhaitenreceipt<<"---------------------------------"<<endl;
					manhaitenreceipt<<"|           Manhainten          |"<<endl;
					manhaitenreceipt<<"---------------------------------"<<endl;
					manhaitenreceipt<<"|  Total Items: "<<chart<<"               |"<<endl;
					manhaitenreceipt<<"|                               |"<<endl;
					manhaitenreceipt<<"|  Total bill : Rs."<<bill<<"            |"<<endl;
					manhaitenreceipt<<"---------------------------------"<<endl;					
					manhaitenreceipt<<"|        Thanks For Coming      |"<<endl;										
					manhaitenreceipt<<"|    *************************  |"<<endl;
					manhaitenreceipt<<"|          Visit Us Again       |"<<endl;	
					manhaitenreceipt<<"---------------------------------"<<endl;						
					manhaitenreceipt<<" Time:"<<con<<endl;
					manhaitenreceipt.close();
					system("manhaiten.txt");				
				}
			else if(count>2)
			{
				cout<<"\t\t\tInvalid Input";
				goto back;
			}			
		}
};	
int manhaiten::chart=0;
int manhaiten::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class cinepax:public manhaiten{
	private:
		int items;
		int a;
		static int chart;
		static int bill;
		int count;
	public:
		void cine()
		{
			jump1:
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t| 1.Golden Seat=1000  |"<<endl;
			cout<<"\t\t\t| 2.Silver Seat=800   |"<<endl;
			cout<<"\t\t\t| 3.Ultra G.Seat=1300   |"<<endl;
			cout<<"\t\t\t| 4.Food Items     |"<<endl;
			cout<<"\t\t\t--------------------"<<endl;				
			cout<<"\t\t\t  Enter 1,2,3,4     "<<endl;
			cin>>items;
			if(items==2)
				{
					cout<<"\t\t\tOne silver seat(2D) is reserved prize = Rs.800";
					chart++;
					bill=bill+800;
					goto back;							
				}
			else if(items==1)
				{
					cout<<"\t\t\tOne Golden seat(2D) is reserved prize = Rs.1000";
					chart++;
					bill=bill+1000;
					goto back;						
				}
			else if(items==3)
				{
					cout<<"\t\t\tOne Ultra Gold seat(3D) is reserved prize = Rs.1300";
					chart++;
					bill=bill+1300;
					goto back;						
				}				
			else if(items==4)
				{
					cout<<"\t\t\t--------------------"<<endl;				
					cout<<"\t\t\t| 1.POP Corn       |"<<endl;
					cout<<"\t\t\t| 2.Doriest        |"<<endl;
					cout<<"\t\t\t| 3.Soft Drinks    |"<<endl;
					cout<<"\t\t\t--------------------"<<endl;				
					cout<<"\t\t\t  Enter 1,2,3     "<<endl;
					cin>>a;
					if(a==1)
						{
							cout<<"\t\t\tOne pop corn is added in cart prize = Rs.300";
							chart++;
							bill=bill+300;
							goto back;
						}
					else if(a==2)
						{
							cout<<"\t\t\tOne dorites is added in cart prize = Rs.500";
							chart++;
							bill=bill+500;
							goto back;
						}
					else if(a==3)
						{
							cout<<"\t\t\tOne soft drink is added in cart prize = Rs.100";
							chart++;
							bill=bill+100;
							goto back;
						}
					else if(a>3)
					{
						cout<<"\t\t\tInvalid Input"<<endl;
						goto jump1;
					}		
				}
			else if(items>4)
			{
				cout<<"\t\t\tInvalid Input"<<endl;
				goto jump1;
			}
			back:
			cout<<endl;	
			cout<<"Do you want to continue(press 1 for futher order food and 2 for cartout):";
			cin>>count;
			if(count==1)
				{
					goto jump1;
				}
			else if(count==2)
				{
					now=time(0);
					con=ctime(&now);		
					ofstream cinereceipt;
					cinereceipt.open("cine.txt");
					cinereceipt<<"---------------------------------"<<endl;
					cinereceipt<<"|             CineStar          |"<<endl;
					cinereceipt<<"---------------------------------"<<endl;
					cinereceipt<<"|  Total Purchase: "<<chart<<"            |"<<endl;
					cinereceipt<<"|                               |"<<endl;
					cinereceipt<<"|  Total bill : Rs."<<bill<<"             |"<<endl;
					cinereceipt<<"---------------------------------"<<endl;					
					cinereceipt<<"|        Thanks For Coming      |"<<endl;										
					cinereceipt<<"|    *************************  |"<<endl;
					cinereceipt<<"|          Visit Us Again       |"<<endl;	
					cinereceipt<<"-------------------v--------------"<<endl;						
					cinereceipt<<" Time:"<<con<<endl;
					cinereceipt.close();
					system("cine.txt");				
				}
			else if(count>2)
			{
				cout<<"\t\t\tInvalid Input"<<endl;
				goto back;
			}							
		}
};
int cinepax::chart=0;                   //static variable
int cinepax::bill=0;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class shop:public cinepax{             //inheritance
	private:
		int ch_mall_shop;
	public:
		void shop_item()
		{
			jump:
						system("cls");
			now=time(0);
			con=ctime(&now);
			string a="\t\t\t\t\t\t\t\t\t\t _________________________________________\n\t\t\t\t\t\t\t\t\t\t|                  * * *                  |\n\t\t\t\t\t\t\t\t\t\t|        WELCOME TO Emporium  MALL        |\n\t\t\t\t\t\t\t\t\t\t|_________________________________________|\n\t\t\t\t\t\t\t\t\t\t|                     |                   |\n\t\t\t\t\t\t\t\t\t\t|     Brand NAMES     |     FLOOR NAME    |\n\t\t\t\t\t\t\t\t\t\t|_____________________|___________________|\n\t\t\t\t\t\t\t\t\t\t|                     |                   |\n\t\t\t\t\t\t\t\t\t\t| 1.BREAKOUT          |  Ground Floor     |\n\t\t\t\t\t\t\t\t\t\t| 2.CAMBRIDGE         |  Ground Floor     |\n\t\t\t\t\t\t\t\t\t\t| 3.BONANZA           |  Ground Floor     |\n\t\t\t\t\t\t\t\t\t\t| 4.SKIN CARE         |  Ground Floor     |\n\t\t\t\t\t\t\t\t\t\t| 5.TOYS              |  First  Floor     |\n\t\t\t\t\t\t\t\t\t\t| 6.BURGER KING       |  First  Floor     |\n\t\t\t\t\t\t\t\t\t\t| 7.MANHAITAN BITES   |  First  Floor     |\n\t\t\t\t\t\t\t\t\t\t| 8.CINESTAR          |  Second Floor     |\n\t\t\t\t\t\t\t\t\t\t|_____________________|___________________|\n\t\t\t\t\t\t\t\t\t\t|                                         |\n\t\t\t\t\t\t\t\t\t\t| 9.           Exit from mall             |\n\t\t\t\t\t\t\t\t\t\t|_________________________________________|\n\t\t\t\t\t\t\t\t\t\t       ***Enter 1,2,3,4,5,6,7,8,9***";
			
					for(int i=0; a[i]!='\0';i++)
					{
						cout << a[i];
						Sleep(2);
					}

			cout<<endl;
			cout<<"\t\t\t\t\t\t\t\t\t\tCurrent time:     "<<con<<endl;
			cin>>ch_mall_shop;
			switch(ch_mall_shop)
			{
				case 1:
					{
						break_items();
						goto jump;
					}
				case 2:
					{
						cam_items();
						goto jump;	
					}
				case 3:
					{
						bon_items();
						goto jump;
					}
				case 4:
					{
						skin_items();
						goto jump;	
					}
				case 5:
					{
						toy_items();
						goto jump;
					}
				case 6:
					{
						burger_items();
						goto jump;
					}					
				case 7:
					{
						manhaiten_items();
						goto jump;
					}
				case 8:
					{
						cine();
						goto jump;
					}								
				case 9:
					{
						system("cls");
						string a="---------------------------------\n|         Emporium MALL         |\n---------------------------------\n|     Hamid Riaz Khan     #239  |\n|     Inzamam Ul Haq     #284    |\n|       Thank For Coming       |\n|    *************************  |\n|       Visit Us Again          |\n-----------------v---------------\n";
					
						for(int i=0; a[i]!='\0';i++)
					{
						cout << a[i];
						Sleep(1);
					}
					
						now=time(0);                   //system time
						con=ctime(&now);		
						ofstream exitreceipt;			//filehandling
						exitreceipt.open("exit.txt");
						
					exitreceipt<<"---------------------------------"<<endl;
					exitreceipt<<"|         Emporium MALL         |"<<endl;
					exitreceipt<<"---------------------------------"<<endl;
					exitreceipt<<"|     Hamid Riaz Khan   #239    |"<<endl;
					exitreceipt<<"|     Inzamam ul Haq    #284    |"<<endl;
					exitreceipt<<"---------------------------------"<<endl;					
					exitreceipt<<"|        Thank For Coming       |"<<endl;										
					exitreceipt<<"|    *************************  |"<<endl;
					exitreceipt<<"|         Visit Us Again        |"<<endl;	
					exitreceipt<<"-------------------v-------------"<<endl;						
					exitreceipt<<" Time:"<<con<<endl;															
					exitreceipt.close();
					system("exit.txt");

						break;						
					}
				default:
					cout<<"\t\t\tInvalid Input"<<endl;
					break;			
			}																														
		}
};
int main()
{
	shop p;                 //object declare
	p.parking();			//object calling
	if(about==1)
	{
		info* ptr;             //pointer
		ptr = new info;
		ptr->info_cus();      //polymorphism
		system("cls");        //clear screen		
		p.shop_item();
	}
	else
	{
		cout<<endl;
	}
return 0;
}



