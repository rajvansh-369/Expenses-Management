<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpenseResource\Pages;
use App\Filament\Resources\ExpenseResource\RelationManagers;
use App\Filament\Resources\ExpenseResource\Widgets\ExpenseOverview;
use App\Models\Expense;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

 

class ExpenseResource extends Resource
{
    // protected static ?string $model = Expense::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';


     public static function getEloquentQuery(): Builder
        {
            return parent::getEloquentQuery()->where('user_id',auth()->user()->id);
        }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->user()->id)
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required(),
                Forms\Components\Select::make('pos_neg')
                ->options([
                    0 => 'Credit',
                   1 => 'Debit',
                  
                ])
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(255),
              
                Forms\Components\DateTimePicker::make('transaction_date')
                    ->label('Transaction Date')
                    ->maxDate(now())  
                    ->required()
                    ->default(now()),
                Toggle::make('home_transaction')
                    ->label('Home Transaction'),

                Toggle::make('lend_borrow_status')
                    ->label('Lend / Borrow')
                    ->reactive(),

                    Fieldset::make('Lend / Borrow Details')
                    ->relationship('Lend_Borrow')
                    ->schema([
                        Radio::make('lend_borrow')
                        ->label(function (Closure $set, $state, $get) {

                            if($get('lend_borrow') == 1){

                                $set('from', auth()->user()->name);
                                if($get('from') == auth()->user()->name && $get('to') == auth()->user()->name){

                                    $set('to', "");
                                }
                            } elseif ($get('lend_borrow') == 2){
                                
                                $set('to', auth()->user()->name);
                                if($get('from') == auth()->user()->name && $get('to') == auth()->user()->name){

                                    $set('from', "");
                                }
                            }


                            return "";
                        })
                        ->options([
                            '1' => 'Lend',
                            '2' => 'Borrow',
                            
                        ])
                        ->inline(),
                        Forms\Components\TextInput::make('from')
                         ->label("From")
                        ->required(),
                        Forms\Components\TextInput::make('to')
                         ->label("To")
                        ->required(),
                        Toggle::make('status')
                             ->label('Status')
                             ->offIcon('heroicon-s-lightning-bolt')
                             ->onIcon('heroicon-s-check'),
                    ])->hidden( fn (Closure $get) => $get('lend_borrow_status') == 1 ? false : true)
                            ->reactive()
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->rowIndex(),
                Tables\Columns\TextColumn::make('amount') ->formatStateUsing(fn (string $state): string => __("₹{$state}")),
                Tables\Columns\TextColumn::make('description')->limit(15),
                Tables\Columns\TextColumn::make('pos_neg')
                    ->formatStateUsing(fn (string $state): string =>  ($state == 1)?  "Debit" : "Credit" )
                    ->weight('bold')
                    ->color(function (TextColumn $column): ?string {
                        $state = $column->getState();
                 
                        if ($state == 1) {
                            return 'danger';
                        }
                        return 'success';
                    })
                        ->label("Transaction Type"),
                    IconColumn::make('home_transaction')
                        ->options([
                            'heroicon-o-pencil' => 'draft',
                            // 'heroicon-o-clock' => 1,
                            'heroicon-s-home' => True,
                            'entypo-cross' => False,
                        ])
                        ->colors([
                            'secondary',
                            'danger' => False,
                            // 'warning' => 1,
                            'success' => True,
                        ])->label('Home Transaction'),
                Tables\Columns\TextColumn::make('transaction_date')
                    ->label("Transaction Date")
                    ->dateTime('D  M d, Y h:i A'),


                Tables\Columns\TextColumn::make('created_at')
                     ->label("Transaction Since")
                    ->since(),
            ])->defaultSort('transaction_date', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {

        return [
            
            ExpenseOverview::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExpenses::route('/'),
            'create' => Pages\CreateExpense::route('/create'),
            'edit' => Pages\EditExpense::route('/{record}/edit'),
        ];
    }    
}
