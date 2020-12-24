#include<iostream>
#include<conio.h>
#include<Windows.h>
#include<string>
using namespace std;
int UserMain();
void line();
int  main();
class UsersignUp:private Person,file
{
    public:
	UsersignUp():Person()
	{
		
	}
	UsersignUp(string idd,string fn,string ln,string add,string ph,string pass):Person(idd,ln,fn,ph,add,pass)
	{
		
	}
  void UserSignup()
  {    
	  bool flag=false;
	  write.open("Customer.csv",ios::app);
	  read.open("Customer.csv",ios::in);
	  while (!read.eof())
	  {
		getline(read,searchId,',');
		getline(read,searchPass,',');
		getline(read,searchFName,',');
		getline(read,searchLName,',');
		getline(read,searchPhone,',');
		getline(read,searchAdd,'\n');
		if(id==searchId)
		{
			cout<<"\t\t\t Sorry Jaani ID Already Excist "<<endl;
			flag=true;
			break;
			
			
		}
	  }
	  read.close();
	  if(flag==false)
	  {
       write<<id<<','<<password<<','<<firstName<<','<<lastName<<','<<phone<<','<<address<<endl;
	   dislay();
	  }
	  
	  write.close();
	  
  }

};
class UsersignIn:private Person,file{
	 public:
	UsersignIn():file()
	{
		
	}
	UsersignIn(string idd,string pass)
	{
		searchId=idd;
		searchPass=pass;
	}
	UsersignIn(string idd)
	{
		searchId=idd;
		
	}
bool UserSignin()
  {
	  read.open("Customer.csv",ios::in);
	while(!read.eof())
    { 
		getline(read,id,',');
		getline(read,password,',');
        getline(read,firstName,',');
		getline(read,lastName,',');
		getline(read,phone,',');
		getline(read,address,'\n');
		if(id==searchId && password==searchPass)
        {
			return true;
			check=true;
            break;
        }
	
    }
		if(check==false)
    {
		   cout<<"\t\t\t Wrong Password OR Id"<<endl;
		   return false;
 
		
    }
    read.close();
	
}
  
 void UserforGottonPass()
  {
	 read.open("Customer.csv",ios::in);
	while(!read.eof())
    { 
		getline(read,id,',');
		getline(read,password,',');
        getline(read,firstName,',');
		getline(read,lastName,',');
		getline(read,phone,',');
		getline(read,address,'\n');
		if(id==searchId)
        {
	        cout<<"\t\t\tID : "<<id<<endl;
			cout<<"\t\t\tPassword: "<<password<<endl;
			check=true;
            break;
        }
	
    }
		if(check==false)
    {
        cout<<" \t\t\n ID did'nt Match \n";
		
    }
    read.close();
}
  

};

class ShowFood:private categoryDetail,file,ItemDetail{
	public:
	 void ShowDeals()
	{
		read.open("Category.csv",ios::in);
		while(!read.eof())
		{
		    getline(read,categoryName,',');
			setCategoryName(categoryName);
			getline(read,food1,',');
			setFood1(food1);
			getline(read,food2,',');
			setFood2(food2);
			getline(read,food3,',');
			setFood3(food3);
			getline(read,drink,',');
			setDrink(drink);
			getline(read,price,'\n');
			setPrice(price);
			if(categoryName != "")
			{
				line();
			  DisplayCategoryRes();
			    line();
			}
			}
		
		read.close();
		
	}
	  void ShowRandomFood()
	{
		read.open("food.csv",ios::in);
		while(!read.eof())
		{
			getline(read,foodId,',');
			setFoodId(foodId);
			getline(read,foodName,',');
			setFoodName(foodName);
			getline(read,foodPrice,',');
			setPrice(foodPrice);
			getline(read,foodDescription,'\n');
			setDescription(foodDescription);
			if(foodId != "")
			{
		    line();
			displayFoodRes();
			line();
			}
			}
		
		read.close();
		
	}
};
class userFunctionalety:private categoryDetail, Person, file,ItemDetail{
	ShowFood deal;
public:
	void afterLoginUserFunctionality()
	{
		system("cls");
		while (true)
		{
			 line();
			 cout<<"\t\t\t1.Show Deals"<<endl;
			 line();
			 cout<<"\t\t\t2.Show Items"<<endl;
			 line();
	         cout<<"\t\t\t3.Give DEAL Order"<<endl;
	         line();
	         cout<<"\t\t\t4.Delete DEAL Order"<<endl;
	        line();
	        cout<<"\t\t\t5.Give ITEM Order"<<endl;
	         line();
			  cout<<"\t\t\t6.Delete ITEM Order"<<endl;
	         line();
	         cout<<"\t\t\t7.View Your DEAL Order"<<endl;
	         line();
	        cout<<"\t\t\t8.View Your ITEM Order"<<endl;
	         line();
	        cout<<"\t\t\t9.See Your Bill"<<endl;
	        line();
			cout<<"\t\t\t10.Have You Gotton Your Order "<<endl;
			line();
			cout<<"\t\t\t11.Back"<<endl;
			line();
	       cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
		   switch (choice)
		   {
		   case 1:
			   system("cls");
			   deal.ShowDeals();
			   system("pause");
			   system("cls");
			   break;
		   case 2:
			   system("cls");
			   deal.ShowRandomFood();
			   system("pause");
			   system("cls");
			   break;
		   case 3:
			   system("cls");
			   giveOrderedDeal();
			   break;
		   case 4:
			   system("cls");
			   DelDeal();
			   break;
		   case 5:
			   system("cls");
			    giveOrdereItem();
			   break;
		   case 6:
			   system("cls");
			   removeItemInCurrentOrdered();
			   break;
		   case 7:
			   system("cls");
			   viewDealOrederedDetailed();
			   system("pause");
			   break;
		   case 8:
			   system("cls");
			   viewItemOrederedDetailed();
			   system("pause");
			   break;
		   case 9:
			   system("cls");
			   showBill();
			   system("pause");
			   system("cls");

			   break;
		   case 10:
			   system("cls");
			   doneStatus();
			   system("pause");
			   system("cls");
			   break;
		   case 11:
			   system("cls");
			   UserMain(); 
			   break;
		   default:
			   cout<<"\t\t\t Please Select A Right Option : "<<endl;
			   system("pause");
			   system("cls");
			   break;
		   }

		}
	}
void giveOrderedDeal()
	{
		cin.ignore();
		write.open("OrderdDeal.csv",ios::app);
		cout<<"\t\t\t  Enter Your ID : ";getline(cin,id);
		cout<<"\t\t\t      Deal Name : ";getline(cin,categoryName);
		cout<<"\t\t\t       Quantity : ";getline(cin,quantity);
		write<<id<<','<<categoryName<<','<<quantity<<endl;
		write.close();
		cout<<"\t\t\t Deal     : "<<categoryName<<endl;
		cout<<"\t\t\t Quantity : "<<quantity<<endl;
		cout<<"\t\t\t Has Successfully Orederd "<<endl;
	}
void DelDeal()
	{
		cin.ignore();
		read.open("OrderdDeal.csv",ios::in);
		temp.open("temp.csv",ios::out);
		setCheck();
		cout<<"\t\t\t Deal Name Do You Want Delete : ";getline(cin,searchCategory);
		setCategoryName(searchCategory);
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,categoryName,',');
			getline(read,quantity,'\n');
			if(searchCategory==categoryName)
			{
				id="";
				categoryName="";
				quantity="";
				check=true;
				cout<<"\t\t\t  Deleted Deal :"<<categoryName<<endl;
				
				

			}
			else
			{
				temp<<id<<','<<categoryName<<','<<quantity<<endl;
			}
		}

		if(check==false)
		{
			cout<<"Deal Name Did'nt Match : "<<searchCategory<<endl;
		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("OrderdDeal.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,id,',');
			getline(temp,categoryName,',');
			getline(temp,quantity,'\n');
			if(id!="")
			{
				write<<id<<','<<categoryName<<','<<quantity<<endl;
			}
		}
		write.close();
		temp.close();
		remove("temp.csv");

	}
void giveOrdereItem()
	{
		cin.ignore();
		write.open("OrderdFood.csv",ios::app);
		cout<<"\t\t\t  Enter Your ID : ";getline(cin,id);
		cout<<"\t\t\t  Enter Food Id : ";getline(cin,foodId);
		cout<<"\t\t\t       Quantity : ";getline(cin,quantity);
		write<<id<<','<<foodId<<','<<quantity<<endl;
		write.close();
		cout<<"\t\t\t Food  Id : "<<foodId<<endl
			<<"\t\t\t Quantity : "<<quantity<<endl
			<<"\t\t\t Has Orederd Successfully "<<endl;
	
	}
void removeItemInCurrentOrdered()
	{
		cin.ignore();
		read.open("OrderdFood.csv",ios::in);
		temp.open("temp.csv",ios::out);
		setCheck();
		cout<<"\t\t\t Enter Food Id Do You Want Delete : ";getline(cin,searchCategory);
		setFoodId(searchCategory);
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,foodId,',');
			getline(read,quantity,'\n');
			if(searchCategory==foodId)
			{
				
				id="";
				foodId="";
				quantity="";
				cout<<"\t\t\t  Deleted Deal"<<getFoodId()<<endl;;
				check=true;

			}
			else
			{
				temp<<id<<','<<foodId<<','<<quantity<<endl;
			}
		}

		if(check==false)
		{
			cout<<"\t\t\t Food ID Did'nt Match "<<getFoodId()<<endl;
		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("OrderdFood.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,id,',');
			getline(temp,foodId,',');
			getline(temp,quantity,'\n');
			if(id!="")
			{
				write<<id<<','<<foodId<<','<<quantity<<endl;
			}
		}
		write.close();
		temp.close();
		remove("temp.csv");
	
	}
void viewDealOrederedDetailed()
	{
		cin.ignore();
		read.open("OrderdDeal.csv",ios::in);
		cout<<"Enter Your Id : ";getline(cin,searchId);
		setId(searchId);
		setCheck();
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,categoryName,',');
			getline(read,quantity,'\n');
			if(id==searchId)
			{
              line();
			 cout<<"\t\t\t Deal Name : "<<categoryName<<endl;
			 cout<<"\t\t\t Quantity  : "<<quantity<<endl;
			 line();
			 check=true;
			}
			
		}
		if(check==false)
		{
			cout<<"\t\t\tYou Did'nt Place any Deal Orederd "<<getId()<<endl;
		}
		read.close();
	}
void viewItemOrederedDetailed()
	{
		cin.ignore();
		read.open("OrderdFood.csv",ios::in);
		cout<<"Enter Your Id : ";getline(cin,searchId);
		setId(searchId);
		setCheck();
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,foodId,',');
			getline(read,quantity,'\n');
			if(id==searchId)
			{
              line();
			  cout<<"\t\t\t Food Name : "<<foodId<<endl;
			 cout<<"\t\t\t  Quantity  : "<<quantity<<endl;
			 line();
			 check=true;
			}
			
		}
		if(check==false)
		{
			cout<<"\t\t\t You Did'nt Place Item Orederd "<<endl;
		}
		read.close();
	}
void doneStatus()
{
	cin.ignore();
	write.open("Done.csv",ios::app);
	cout<<"\t\t\t Did you get Your Order : ";getline(cin,status);
	write<<getId()<<','<<status<<endl;
	write.close();
}
void showBill()
{
	string dealPrice[20]={"0"},dealQty[20]={"0"},itemPrice[20]={"0"},itemQty[20]={"0"};
	int DPrice[20]={0},DQty[20]={0},IPrice[20]={0},IQty[20]={0};
	int i=0,j=0;
	write.open("Category.csv",ios::in);
	temp2.open("OrderdDeal.csv",ios::in);
		while (!temp2.eof())
	         {
				getline(temp2,id,',');
				getline(temp2,searchCategory,',');
			    getline(temp2,quantity,'\n');
		while (!write.eof())
	              {
		       getline(write,categoryName,',');
			   getline(write,food1,',');
			   getline(write,food2,',');
			   getline(write,food3,',');
			   getline(write,drink,',');
			   getline(write,price,'\n');
				if (categoryName==searchCategory)
				{
					line();
					cout<<"\t\t\t Deal Name : "<<categoryName<<endl;
					cout<<"\t\t\t    Item 1 : "<<food1<<endl;
					cout<<"\t\t\t    Item 2 : "<<food2<<endl;
					cout<<"\t\t\t    Item 3 : "<<food3<<endl;
					cout<<"\t\t\t     Drink : "<<drink<<endl;
					cout<<"\t\t\t     Price : "<<price<<endl;
					cout<<"\t\t\t  Quantity : "<<quantity<<endl;
					line();
					dealPrice[i]=price;
					dealQty[i]=quantity;
					i++;
				}
	                 }
	}
	write.close();
	temp2.close();
	read.open("food.csv",ios::in);
	temp.open("OrderdFood.csv",ios::in);
	while (!temp.eof())
	         {
				 getline(temp,id,',');
				 getline(temp,searchId,',');
			     getline(temp,quantity,'\n');
	while (!read.eof())
	      {
		        getline(read,foodId,',');
			    getline(read,foodName,',');
			    getline(read,foodPrice,',');
			    getline(read,foodDescription,'\n');
				  if(searchId==foodId)
				  {
					  line();
					  cout<<"\t\t\t   Food ID : "<<foodId<<endl;
					  cout<<"\t\t\t Food Name : "<<foodName<<endl;
					  cout<<"\t\t\t     Price : "<<foodPrice<<endl;
					  cout<<"\t\t\t  Quantity : "<<quantity<<endl;
					  line();
					  itemPrice[j]=foodPrice;
					  itemQty[j]=quantity;
					  j++;
				  }
	               }
	}
	read.close();
	temp.close();
	
	for(int i=0;i<=19;i++)
	{
		DPrice[i]=std::atoi(dealPrice[i].c_str());
		DQty[i]=std::atoi(dealQty[i].c_str());
		IPrice[i]=std::atoi(itemPrice[i].c_str());
		IQty[i]=std::atoi(itemQty[i].c_str());
	}

	int SumDeal=0;
	int SumItem=0;
	for (int i = 0; i <=9; i++)
	{
		SumDeal=SumDeal+(DPrice[i]*DQty[i]);
		SumItem=SumItem+(IPrice[i]*IQty[i]);
	}
	cout<<"\t\t\t You Have To Paid "<<SumDeal<<" For Deal Items "<<endl;
	cout<<"\t\t\t You Have To Paid "<<SumItem<<" For Food Items "<<endl;
}
};
class Customer:private file,Person{
public:
 void Usersignp()
 {     cin.ignore();
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tFirst Name : ";getline(cin,firstName);
		   cout<<"\t\t\tLast Name : ";getline(cin,lastName);
		   cout<<"\t\t\tPhone : ";getline(cin,phone);
		   cout<<"\t\t\tAddress : ";getline(cin,address);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
		   UsersignUp Usersign(id,firstName,lastName,address,phone,password);
	      Usersign.UserSignup();
	   }
void Userlogi()
	   {
		   cin.ignore();
		   bool che;
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
	      UsersignIn Usersign(id,password);
		   che=Usersign.UserSignin();
		   if(che==true)
		   {
		  
			   userFunctionalety uf;
			   uf.afterLoginUserFunctionality();
		  
		   }
		   else
		   {
			 UserMain();
		   }


	   }
 void UserforgotPass(){
	         
	           cout<<"\t\t\tFORGOTTON PASSWORD Y?N : ";
			   cin>>Schoice;
			   if(Schoice=="y" ||Schoice == "Y")
			   {
				   cout<<"\t\t\t Enter Your ID : ";cin>>searchId;
				   UsersignIn Userforpass(searchId);
				   Userforpass.UserforGottonPass();
				   
			   }
			   else
			   {
				   UserMain();
			   }
	   }
   


};
int UserMain()
{

	int choice;
	Customer customer;
	cout<<"\n\n\n"<<endl;
   while(true)
   {   line();
	   cout<<"\t\t\t1.Sign In"<<endl;
	   line();
	   cout<<"\t\t\t2.Sign Up"<<endl;
	   line();
	   cout<<"\t\t\t3.Forgot Password"<<endl;
	   line();
	   cout<<"\t\t\t4.Back"<<endl;
	    line();
	   cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
	   switch(choice)
	   {
	   case 1:
		   system("cls");
		   customer.Userlogi();
		   system("pause");
		   break;

	   case 2 :
		    system("cls");
		   customer.Usersignp();
		   system("pause");
		   break;
	   case 3:
		    system("cls");
		   customer.UserforgotPass();
		   system("pause");
		   break;
       case 4:
		   main();
		   break;
	   default:
		      cout<<"\t\t\t Select An Right Option "<<endl;
		   break;
	   }

   }
	
	system("pause");
	return 0;
}
