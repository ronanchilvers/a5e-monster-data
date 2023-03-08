---
statblock: true
name: 'Adult Red Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 20
ac: 19
hp: 310
hit_dice: '23d12 + 161'
speed: '40 ft., climb 40 ft., fly 80 ft.'
stats:
    - 26
    - 10
    - 24
    - 16
    - 14
    - 20
damage_immunities: fire
saves:
    - { dexterity: 6 }
    - { constitution: 13 }
    - { wisdom: 8 }
    - { charisma: 11 }
skillsaves:
    - { intimidation: 11 }
    - { perception: 9 }
    - { stealth: 6 }
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 22'
languages: 'Common, Draconic, one more'
traits:
    0: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to sand. If it has no more uses of this ability, its Armor Class is reduced to 17 until it finishes a long rest.' }
    1: { name: 'Searing Heat', desc: 'A creature that touches the dragon or hits it with a melee attack for the first time on a turn takes 7 (2d6) fire damage.' }
    2: { name: 'Volcanic Tyrant', desc: 'The dragon is immune to the effects of poisonous gases caused by volcanic environments. It also ignores difficult terrain caused by lava.' }
    3: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 19). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:command, hold person, glyph of warding, wall of fire']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can Spit Fire.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 24 (3d10 + 8) piercing damage plus 4 (1d8) fire damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +14 to hit, reach 5 ft., one target. Hit: 21 (3d8 + 8) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +14 to hit, reach 15 ft., one target. Hit: 17 (2d8 + 8) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Cruel Tyranny', desc: 'The dragon snarls and threatens its minions, driving them to immediate action. The dragon chooses one creature it can see and that can hear the dragon. The creature uses its reaction to make one weapon attack with advantage.' }
    - { name: 'Spit Fire', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 21 Dexterity saving throw. The creature takes 22 (4d10) fire damage on a failure or half damage on a success. A creature that fails the save also takes 5 (1d10) ongoing fire damage. A creature can use an action to end the ongoing damage.' }
    - { name: 'Fire Breath (Recharge 56)', desc: 'The dragon exhales a blast of fire in a 60-foot cone. Each creature in that area makes a DC 21 Dexterity saving throw, taking 73 (21d6) fire damage on a failed save or half damage on a success. A creature that fails the saving throw also takes 5 (1d10) ongoing fire damage. While affected by this ongoing damage, it is frightened of the dragon. A creature can use an action to end the ongoing damage.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: 'Cruel Tyranny', desc: 'The dragon uses its Cruel Tyranny action.' }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 19 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 21 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult Red Dragon
```
