---
statblock: true
name: 'Adult Copper Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 17
ac: 18
hp: 253
hit_dice: '22d12 + 110'
speed: '40 ft., climb 40 ft., fly 80 ft.'
stats:
    - 22
    - 12
    - 20
    - 18
    - 14
    - 16
damage_immunities: acid
saves:
    - { dexterity: 7 }
    - { constitution: 11 }
    - { wisdom: 8 }
    - { charisma: 9 }
skillsaves:
    - { deception: 10 }
    - { perception: 9 }
    - { stealth: 7 }
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 20'
languages: 'Common, Draconic, two more'
traits:
    0: { name: 'Flow Within the Mountain', desc: 'The dragon has advantage on Stealth checks made to hide in mountainous regions. By spending 1 minute in concentration while touching a natural stone surface, the dragon can merge into it and emerge from any connected stone surface within a mile.' }
    1: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, some of its scales fall away and turn to stone. If it has no more uses of this ability, its Armor Class is reduced to 16 until it finishes a long rest.' }
    2: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 17). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:hideous laughter, suggestion, mislead, polymorph']
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws. In place of its bite, it can use Acid Spit.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +12 to hit, reach 10 ft., one target. Hit: 22 (3d10 + 6) piercing damage plus 4 (1d8) acid damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +12 to hit, reach 5 ft., one target. Hit: 19 (3d8 + 6) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +12 to hit, reach 15 ft., one target. Hit: 19 (3d8 + 6) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'War Pick (Humanoid Form Only)', desc: 'Melee Weapon Attack: +12 to hit, reach 5 ft., one target. Hit: 10 (1d8 + 6) piercing damage.' }
    - { name: 'Acid Spit', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 19 Dexterity saving throw. The creature takes 16 (3d10) acid damage on a failure or half damage on a success. A creature that fails the save also takes 5 (1d10) ongoing acid damage. A creature can use an action to end the ongoing damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Acid Breath', desc: 'The dragon exhales acid in a 60-foot-long, 5-foot-wide line. Each creature in the area makes a DC 19 Dexterity saving throw, taking 63 (14d8) acid damage on a failed save or half damage on a success. A creature that fails the save is blinded until the end of its next turn.' }
    - { name: 'Slowing Breath', desc: 'The dragon exhales toxic gas in a 60-foot cone. Each creature in the area makes a DC 19 Constitution saving throw, becoming slowed for 1 minute on a failure. A creature repeats the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
    - { name: 'Change Shape', desc: "The dragon magically takes the shape of a humanoid or beast, or changes back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (dragon's choice). In the new form, the dragon's stats are unchanged except for its size. It can't use Acid Spit, Breath Weapons, Tail Attack, or Wing Attack except in dragon form. In beast form, it can attack only with its bite and claws, if appropriate to its form. If the beast form is Large or smaller, the reach of these attacks is reduced to 5 feet. In humanoid form, it can attack only with its war pick." }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 17 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 19 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    - { name: "Trickster's Gambit (Costs 2 Actions)", desc: "The dragon magically teleports to an unoccupied space it can see within 30 feet and creates two illusory duplicates in different unoccupied spaces within 30 feet. These duplicates have an AC of 11, and a creature that hits one with an attack can make a DC 16 Intelligence (Investigation) check, identifying it as a fake on a success. The duplicates disappear at the end of the dragon's next turn but otherwise mimic the dragon's actions perfectly, even moving according to the dragon's will." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult Copper Dragon
```
