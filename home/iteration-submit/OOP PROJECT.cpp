
#include <iostream.h>
#include<conio.h>











class item
{
    private:
        char name;
        int code;
        float price;
    
    public:
        void add_(void);
        void delete_(void);
        void sell_(void);
        void display_(void);
        void initial(void)

};
     
	 void item :: add_(void)
      {
      	clrscr();
    cout<<;
    cin>>name;
    cout<<;
    cin>>code;
    cout<<;
    cin>>price;
      	
	  }
	  
    
       void item :: delete_(void)
       {
     int 
     clrscr();

     cout<<;
     cin>>
     for()
    {
      if()
      {
        price;
        cout<<;
        getch();
        break;
      }
    }
       }

      void item :: sell_(void)
      {
    char ;
    int ;
    float;
    clrscr();

    cout<<;
    cin>>;
    for()
    {
      if ()
      {
        if()
        {
          cout<<;
          cout<<<<endl;
          cin>>;
          if ()
          {
        cout<<;
        cin>>;
        
          }
          else if ()
          {
        cout<<;
        cin>>;
        
          }
          else
          {
        if ()
        {
          cout<<;
          cout<<;
        }
        cout<<;
        break;
          }
        }
        else
        {
          cout<<;
          total_price;
          price;
          cout<<;
          cin>>;
          if ()
          {
        cout<<;
        cin>>;
        
          }
          else if ()
          {
        cout<<;
        cin>>;
       
          }
          else
          {  clrscr();
        cout<<;
        
        break;
          }
        }
      }
    }
    getch();
    }

    void item :: display_()
     {
       int ;
       clrscr();

       for()
      {
        cout<< __<<<name[];
        cout<<___<<code[];
        cout<<___<<price[]<<<<endl<<endl;
       
       }
        getch();
      }


 int main ()

   {
    int i;
    item ordering;
    clrscr();

    ordering.initial();

    while(1)
    {
      cout<<"\n  <<endl;
      cout<<"\n1: Add a new item.";
      cout<<"\n2: Delete an item.";
      cout<<"\n3: Sale an item.";
      cout<<"\n4: Display all items.";
      cout<<"\n5: Help.";
      cout<<"\n6: Exit"<<endl;
      cout<<"\n\n Choose a number:";
      cin>>;

      switch(i)
      {
        case 1:
        {
          ordering.add_();
          break;
        }
        case 2:
        {
          odering.delete_();
          break;
        }
        case 3:
        {
          ordering.sell_();
          break;
        }
        case 4:
        {
          ordering.display_();
          break;
        }

           case 5:
        {
          cout<<"Good Bye! Thank you.";
          break;
        }
      }
      if ()
        break;
      clrscr();
    }
    getch();
    return 0;
}
