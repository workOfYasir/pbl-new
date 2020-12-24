#include<iostream>
using namespace std;

class Atom{
	
	private:
	   int protons,neutrons,electrons;
	   
	public:
	   Atom()//constructor
	   {
	        protons = 1;
	        neutrons = 0;
	        electrons = 1; 
	   }   
	   
	   void setvalues(int p, int n, int e)//setter
	   {
	   	protons = p;
	   	neutrons = n;
	   	electrons = e;
	   }
	   
	   void getvalues()//getter
	   {
	   	 cout<<"\n\nEnter the no. of Protons :";
	   	 cin>>protons;
	   	 
	   	 cout<<"\nEnter the no. of Neutrons :";
	   	 cin>>neutrons;
	   	 
	   	 cout<<"\nEnter the no. of Electrons :";
	   	 cin>>electrons;
	   	 
	   	 if(protons < 1 || electrons < 1 || neutrons < 0)
	   	 {    system("cls");
	   	      cout<<"\nIncorrect Input! Enter Again.....\n\n";
			  getvalues();	 	
		 }
	   	 
	   }
	   
	   void islon()
	   {
	   	
	   	  	if(protons != neutrons)
	   	{
	   	    cout<<"\nAtom is an ION\n";
		}
		
		else
		{
			cout<<"\nAtom is not an ION\n";
		}
		
	   }
	   
	   void AtomicMassNumber()
	   {
	   	 int atomic;
	   	 atomic = protons + electrons;
	   	 cout<<"\n\nAtomic Mass is : "<<atomic;
	   	
	   }
	   
	   void checkIfHydrogen()
	   {
	   	if(protons == 1 && electrons == 1 && neutrons == 0)
	   	 {    
	   	      cout<<"\nAn Hydrogen Object is Created\n\n";
		 }
		else
		{
			cout<<"\nObject is not an Hydrogen\n\n";
		 } 
	   }
	   
	
};

int main()
{
	Atom a;
    a.checkIfHydrogen();
	a.getvalues();
	system("cls");
	a.islon();
	a.AtomicMassNumber();

}
