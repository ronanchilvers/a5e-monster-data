---
statblock: true
name: 'Ancient Gold Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 26
ac: 22
hp: 487
hit_dice: '25d20 + 225'
speed: '40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 30
    - 14
    - 28
    - 18
    - 16
    - 28
damage_immunities: fire
saves:
    - { dexterity: 10 }
    - { constitution: 17 }
    - { wisdom: 11 }
    - { charisma: 17 }
skillsaves:
    - { insight: 11 }
    - { perception: 11 }
    - { persuasion: 17 }
    - { stealth: 10 }
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 24'
languages: 'Common, Draconic, two more'
traits:
    0: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, some of its scales fall away, forming pools of molten gold. If it has no more uses of this ability, its Armor Class is reduced to 20 until it finishes a long rest.' }
    1: { name: Valor, desc: "Creatures of the dragon's choice within 30 feet gain a +3 bonus to saving throws and are immune to the charmed and frightened conditions." }
    2: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 25). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:bless, healing word,banishment, greater restoration', ' 1/day:divine word, hallow']
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +18 to hit, reach 15 ft., one target. Hit: 32 (4d10 + 10) piercing damage plus 9 (2d8) fire damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +18 to hit, reach 10 ft., one target. Hit: 28 (4d8 + 10) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +18 to hit, reach 20 ft., one target. Hit: 23 (3d8 + 10) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Greatsword (Humanoid Form Only)', desc: 'Melee Weapon Attack: +18 to hit, reach 5 ft., one target. Hit: 17 (2d6 + 10) slashing damage.' }
    - { name: 'Molten Spit', desc: ' The dragon targets one creature within 60 feet, forcing it to make a DC 25 Dexterity saving throw. The creature takes 27 (5d10) fire damage on a failure or half on a success. Liquid gold pools in a 5-foot-square occupied by the creature and remains hot for 1 minute. A creature that ends its turn in the gold or enters it for the first time on a turn takes 22 (4d10) fire damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Molten Breath', desc: 'The dragon exhales molten gold in a 90-foot cone. Each creature in the area makes a DC 25 Dexterity saving throw, taking 88 (16d10) fire damage on a failed save or half damage on a success. A creature that fails the saving throw is covered in a shell of rapidly cooling gold, reducing its Speed to 0. A creature can use an action to break the shell, ending the effect.' }
    - { name: 'Weakening Breath', desc: 'The dragon exhales weakening gas in a 90-foot cone. Each creature in the area must succeed on a DC 25 Constitution saving throw or suffer disadvantage on weapon attack rolls for 1 minute. A weakened creature repeats the saving throw at the end of each of its turns, ending the effect on a success.' }
    - { name: 'Change Shape', desc: "The dragon magically takes the shape of a humanoid or beast, or changes back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (dragon's choice). In the new form, the dragon's stats are unchanged except for its size. It can't use Molten Spit, Breath Weapons, Tail Attack, or Wing Attack except in dragon form. In beast form, it can attack only with its bite and claws, if appropriate to its form. If the beast form is Large or smaller, the reach of these attacks is reduced to 5 feet. In humanoid form, it can attack only with its greatsword." }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
    - { name: Vanguard, desc: 'When another creature the dragon can see within 20 feet is hit by an attack, the dragon deflects the attack, turning the hit into a miss.' }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 25 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 26 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    - { name: 'Fiery Reprisal (Costs 2 Actions)', desc: 'The dragon uses Molten Spit against the last creature to deal damage to it.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Ancient Gold Dragon
```
